<?php

namespace App\Http\Controllers\Chatbot;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ChatbotController extends Controller
{
    /**
     * Normalisasi role Laravel agar sama dengan role yang dikenali oleh Python RAG.
     * Python mengenali: user, unit, ppk, super_admin.
     */
    private function normalizeRole(?string $role): ?string
    {
        if ($role === null || trim($role) === '') {
            return null;
        }

        $role = strtolower(trim($role));
        $role = str_replace('-', '_', $role);

        return match ($role) {
            'user', 'public', 'publik', 'guest', 'pengunjung', 'user_publik' => 'user',
            'unit' => 'unit',
            'ppk' => 'ppk',
            'super admin', 'superadmin', 'super_admin', 'admin' => 'super_admin',
            default => $role,
        };
    }

    /**
     * Mengirim pertanyaan ke FastAPI/Python Chatbot API.
     */
    private function askChatbot(string $query, ?string $role, bool $showSources = false): array
    {
        $apiUrl = config('services.chatbot.url', env('CHATBOT_API_URL', 'http://127.0.0.1:5000/api/chat'));
        $apiKey = config('services.chatbot.key', env('CHATBOT_API_KEY', 'siapabaja-secret-2026'));
        $timeout = (int) config('services.chatbot.timeout', env('CHATBOT_TIMEOUT', 180));

        $payload = [
            'query' => $query,
            'role' => $this->normalizeRole($role),
            'show_sources' => $showSources,
        ];

        try {
            $response = Http::timeout($timeout)
                ->acceptJson()
                ->asJson()
                ->withHeaders([
                    'X-Api-Key' => $apiKey,
                ])
                ->post($apiUrl, $payload);

            if ($response->successful()) {
                $json = $response->json();

                if (is_array($json)) {
                    if (!array_key_exists('success', $json)) {
                        $json['success'] = true;
                    }
                    return $json;
                }

                return [
                    'success' => false,
                    'answer' => 'Format respons chatbot tidak valid.',
                ];
            }

            Log::error('Chatbot API error', [
                'url' => $apiUrl,
                'status' => $response->status(),
                'body' => $response->body(),
                'payload' => $payload,
            ]);

            return [
                'success' => false,
                'answer' => 'Gagal mendapatkan jawaban dari chatbot server.',
                'meta' => [
                    'http_status' => $response->status(),
                ],
            ];
        } catch (\Throwable $e) {
            Log::error('Chatbot API exception', [
                'url' => $apiUrl,
                'error' => $e->getMessage(),
                'payload' => $payload,
            ]);

            return [
                'success' => false,
                'answer' => 'Koneksi ke chatbot server terputus atau timeout.',
                'meta' => [
                    'error' => $e->getMessage(),
                ],
            ];
        }
    }

    /**
     * Endpoint untuk user internal yang sudah login.
     */
    public function ask(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'query' => 'required|string|min:3|max:1000',
            'show_sources' => 'nullable|boolean',
        ]);

        $user = Auth::user();
        $role = $this->normalizeRole($user?->role ?? null);

        $result = $this->askChatbot(
            query: $validated['query'],
            role: $role,
            showSources: (bool) ($validated['show_sources'] ?? false)
        );

        return response()->json([
            'success' => (bool) ($result['success'] ?? false),
            'answer' => $result['answer'] ?? 'Maaf, tidak ada jawaban.',
            'meta' => $result['meta'] ?? [],
            'sources' => $result['sources'] ?? [],
        ], ($result['success'] ?? false) ? 200 : 502);
    }

    /**
     * Endpoint untuk user publik / pengunjung.
     * Penting: role dikirim sebagai "user", bukan null, agar retrieval memprioritaskan Dataset_Role_User.
     */
    public function askPublic(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'query' => 'required|string|min:3|max:1000',
            'show_sources' => 'nullable|boolean',
        ]);

        $result = $this->askChatbot(
            query: $validated['query'],
            role: 'user',
            showSources: (bool) ($validated['show_sources'] ?? false)
        );

        return response()->json([
            'success' => (bool) ($result['success'] ?? false),
            'answer' => $result['answer'] ?? 'Maaf, tidak ada jawaban.',
            'meta' => $result['meta'] ?? [],
            'sources' => $result['sources'] ?? [],
        ], ($result['success'] ?? false) ? 200 : 502);
    }

    /**
     * Health check untuk mengecek status FastAPI/Python chatbot server.
     */
    public function health(): JsonResponse
    {
        $healthUrl = config('services.chatbot.health_url', env('CHATBOT_HEALTH_URL', 'http://127.0.0.1:5000/api/health'));
        $timeout = (int) config('services.chatbot.timeout', env('CHATBOT_TIMEOUT', 180));

        try {
            $response = Http::timeout($timeout)->acceptJson()->get($healthUrl);

            if ($response->successful()) {
                return response()->json([
                    'status' => 'ok',
                    'chatbot' => $response->json(),
                ], 200);
            }

            return response()->json([
                'status' => 'unavailable',
                'chatbot' => $response->json(),
            ], 503);
        } catch (\Throwable $e) {
            Log::error('Chatbot health check failed', ['error' => $e->getMessage()]);

            return response()->json([
                'status' => 'unavailable',
                'message' => 'Chatbot server tidak dapat dihubungi.',
            ], 503);
        }
    }
}
