# SIAPABAJA Chatbot

README ini berisi panduan setup awal dan cara menjalankan server chatbot SIAPABAJA.

Chatbot ini menggunakan:

- Laravel sebagai aplikasi web utama
- FastAPI sebagai server chatbot
- Ollama sebagai penyedia model embedding dan model chat
- Local NumPy embedding (`embeddings.npy`)

---

## TAHAPAN SETUP AWAL CHATBOT

### 1. Setup Laravel terlebih dahulu

Lakukan setup Laravel seperti biasa, misalnya:

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
```

Pastikan Laravel sudah terhubung dengan database dan website SIAPABAJA sudah bisa berjalan dengan baik.

Jalankan web Laravel:

```bash
php artisan serve
```

Jika web sudah bisa dibuka, lanjutkan ke setup chatbot.

---

### 2. Pastikan konfigurasi chatbot sudah ada di `.env`

Buka file `.env` Laravel, lalu pastikan konfigurasi berikut sudah ada:

```env
CHATBOT_API_URL=
CHATBOT_HEALTH_URL=
CHATBOT_API_KEY=
CHATBOT_TIMEOUT=
```

Jika konfigurasi tersebut belum terisi atau masih kosong, hubungi Nisa.

Setelah mengubah `.env`, jalankan:

```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
```

---

### 3. Masuk ke folder chatbot

Masuk ke folder chatbot melalui terminal atau terminal VS Code:

```bash
cd D:\siapabajav2\chatbot_siapabaja
```

Sesuaikan path tersebut dengan lokasi folder chatbot di laptop masing-masing.

---

### 4. Install dependency Python

Jalankan:

```bash
pip install -r requirements.txt
```

---

### 5. Install Ollama di laptop

Download dan install Ollama melalui link berikut:

```text
https://ollama.com/download/windows
```

---

### 6. Install model Ollama di terminal

Jalankan perintah berikut:

```bash
ollama pull nomic-embed-text
ollama pull llama3.1:8b
```

Keterangan:

- `nomic-embed-text` digunakan untuk membuat embedding dataset.
- `llama3.1:8b` digunakan sebagai model chat.

---

### 7. Cek model Ollama

Jalankan:

```bash
ollama list
```

Pastikan model berikut muncul:

```text
llama3.1:8b
nomic-embed-text:latest
```

Jika model belum muncul, ulangi perintah pull model:

```bash
ollama pull nomic-embed-text
ollama pull llama3.1:8b
```

---

### 8. Buat index chatbot

Sebelum chatbot dijalankan, dataset perlu di-index terlebih dahulu.

Pastikan posisi terminal berada di folder chatbot:

Contoh

```bash
cd D:\siapabajav2\chatbot_siapabaja
```

Lalu jalankan:

```bash
python indexer.py
```

---

### 9. Jalankan server chatbot FastAPI

Masih di folder chatbot, jalankan:

```bash
python -m uvicorn api:app --reload --host 0.0.0.0 --port 5000
```

Jika berhasil, akan muncul informasi seperti:

```text
Uvicorn running on http://0.0.0.0:5000
Application startup complete
```

Terminal ini jangan ditutup selama chatbot digunakan.

---

### 10. Jalankan web Laravel

Buka terminal baru, masuk ke folder utama SIAPABAJA:

Contoh

```bash
cd D:\siapabajav2
```

Lalu jalankan:

```bash
php artisan serve
```

---

## CARA MENJALANKAN CHATBOT SETELAH SETUP AWAL SELESAI

Jika setup awal sudah pernah dilakukan, maka setiap ingin menjalankan chatbot cukup buka 2 terminal utama.

### Terminal 1 — Jalankan server chatbot FastAPI

Masuk ke folder chatbot:

Contoh

```bash
cd D:\siapabajav2\chatbot_siapabaja
```

Jalankan:

```bash
python -m uvicorn api:app --reload --host 0.0.0.0 --port 5000
```

### Terminal 2 — Jalankan web Laravel

Masuk ke folder utama SIAPABAJA:

Contoh

```bash
cd D:\siapabajav2
```

Jalankan:

```bash
php artisan serve
```
