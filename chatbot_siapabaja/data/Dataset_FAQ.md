---
dataset: Dataset_FAQ_Baru
fokus: Jawaban singkat untuk masalah dan pertanyaan umum pada sistem SIAPABAJA
deskripsi: Dataset ini berisi FAQ lintas role yang dijawab secara ringkas, tanpa workflow panjang dan tanpa pembahasan hak akses role secara detail.
total_intent: 28
catatan: Detail langkah penggunaan ditempatkan pada Dataset_Workflow. Detail kewenangan per role ditempatkan pada Dataset_Role. Deskripsi fitur umum ditempatkan pada Dataset_Arsitektur_Fitur.
---

## 1. Intent: auth_troubleshooting
* **Tags:** `login_error`, `invalid_credentials`, `gagal_login`, `lupa_password`
* **Patterns:**
    * "Kenapa saya tidak bisa login?"
    * "Muncul pesan Invalid Credentials saat login."
    * "Bagaimana kalau saya lupa password?"
    * "Password saya salah terus, bagaimana?"
* **Responses:** Pastikan email dan password sudah benar. Jika lupa password, hubungi Super Admin untuk reset akun. User publik tidak memiliki akun login internal.

## 2. Intent: recaptcha_login_issue
* **Tags:** `recaptcha`, `verifikasi_login`, `keamanan_login`
* **Patterns:**
    * "Kenapa login meminta reCAPTCHA?"
    * "Apa fungsi reCAPTCHA saat login?"
    * "Kenapa verifikasi login gagal?"
* **Responses:** reCAPTCHA digunakan untuk membantu memastikan login dilakukan oleh pengguna asli. Jika gagal, ulangi verifikasi, pastikan koneksi stabil, lalu coba login kembali.

## 3. Intent: public_user_login_denied
* **Tags:** `user_publik`, `tanpa_login`, `akses_internal_ditolak`
* **Patterns:**
    * "Kenapa User publik tidak bisa login?"
    * "Apakah pengunjung umum punya akun?"
    * "Kenapa saya tidak bisa masuk dashboard sebagai pengunjung?"
* **Responses:** User publik tidak memiliki akun internal. Pengunjung hanya dapat mengakses halaman publik seperti Landing Page, Regulasi, Kontak, dan Arsip PBJ publik.

## 4. Intent: upload_management
* **Tags:** `upload_file`, `batas_ukuran`, `format_dokumen`
* **Patterns:**
    * "Apakah ada batas ukuran file maksimal?"
    * "Format file apa saja yang didukung?"
    * "Bisakah saya mengunggah file Excel atau Word?"
    * "Berapa maksimal ukuran file upload?"
* **Responses:** Ukuran maksimal file adalah 10MB per file. Format yang didukung meliputi PDF, DOC, DOCX, XLS, XLSX, JPG, JPEG, dan PNG.

## 5. Intent: upload_failed
* **Tags:** `gagal_upload`, `file_ditolak`, `validasi_file`
* **Patterns:**
    * "Kenapa file saya gagal diupload?"
    * "Kenapa dokumen tidak bisa diunggah?"
    * "Kenapa file ditolak sistem?"
* **Responses:** File biasanya gagal diunggah karena ukuran melebihi 10MB, format tidak didukung, koneksi bermasalah, atau ada data wajib pada form yang belum diisi.

## 6. Intent: required_metadata
* **Tags:** `metadata_wajib`, `data_wajib`, `form_pengadaan`
* **Patterns:**
    * "Apa saja metadata wajib pada dokumen?"
    * "Data apa saja yang harus diisi saat tambah arsip?"
    * "Apa isi informasi anggaran yang harus diisi?"
* **Responses:** Metadata utama meliputi Informasi Umum, Status Akses Arsip, dan Informasi Anggaran seperti Tahun, Unit Kerja, Nama Pekerjaan, Status Pekerjaan, Pagu, HPS, Nilai Kontrak, dan Nama Rekanan.

## 7. Intent: incomplete_form_validation
* **Tags:** `form_tidak_lengkap`, `validasi_input`, `data_wajib`
* **Patterns:**
    * "Kenapa data tidak bisa disimpan?"
    * "Kenapa muncul pesan data wajib belum lengkap?"
    * "Apa penyebab form gagal disimpan?"
* **Responses:** Data gagal disimpan jika masih ada field wajib yang kosong, format input tidak sesuai, atau dokumen wajib belum diunggah maupun belum ditandai sebagai tidak dipersyaratkan.

## 8. Intent: document_not_required
* **Tags:** `dokumen_tidak_dipersyaratkan`, `berkas_opsional`, `dokumen_wajib`
* **Patterns:**
    * "Bagaimana jika ada dokumen yang tidak wajib diunggah?"
    * "Apa maksud Dokumen Tidak Dipersyaratkan?"
    * "Apakah semua dokumen harus diupload?"
* **Responses:** Jika dokumen tertentu memang tidak diwajibkan, pengguna dapat menandainya sebagai Dokumen Tidak Dipersyaratkan agar form tetap dapat disimpan.

## 9. Intent: public_private_archive
* **Tags:** `arsip_publik`, `arsip_privat`, `status_akses`
* **Patterns:**
    * "Apa itu arsip publik dan privat?"
    * "Apa bedanya arsip publik dan arsip privat?"
    * "Kenapa ada dokumen yang tidak tampil untuk publik?"
* **Responses:** Arsip Publik dapat dilihat melalui halaman publik. Arsip Privat hanya dapat dilihat oleh pengguna internal yang memiliki kewenangan sesuai aturan akses sistem.

## 10. Intent: private_archive_visibility
* **Tags:** `visibilitas_dokumen`, `arsip_privat`, `hak_akses`
* **Patterns:**
    * "Siapa yang bisa melihat arsip privat?"
    * "Apakah PPK bisa melihat arsip privat Unit?"
    * "Kenapa Unit tidak bisa melihat arsip privat PPK?"
* **Responses:** Arsip Privat Unit dapat dilihat oleh Unit pemilik, PPK, dan Super Admin. Arsip Privat PPK hanya dapat dilihat oleh PPK pemilik dan Super Admin.

## 11. Intent: archive_status_change
* **Tags:** `ubah_status`, `publik_privat`, `koreksi_privasi`
* **Patterns:**
    * "Apakah status arsip bisa diubah?"
    * "Saya tidak sengaja mengatur dokumen menjadi publik."
    * "Apakah arsip publik bisa diubah menjadi privat?"
* **Responses:** Status akses arsip dapat diubah melalui fitur edit arsip oleh pengguna yang berwenang. Setelah disimpan, visibilitas arsip mengikuti status terbaru.

## 12. Intent: archive_not_visible_public
* **Tags:** `arsip_tidak_tampil`, `halaman_publik`, `status_arsip`
* **Patterns:**
    * "Kenapa arsip saya tidak tampil di halaman publik?"
    * "Kenapa dokumen tidak muncul untuk pengunjung?"
    * "Mengapa arsip publik tidak terlihat?"
* **Responses:** Arsip tidak tampil di halaman publik jika statusnya Privat, belum tersimpan dengan benar, terhapus, atau filter/pencarian yang digunakan tidak sesuai.

## 13. Intent: search_filter_no_result
* **Tags:** `pencarian_kosong`, `filter_arsip`, `data_tidak_ditemukan`
* **Patterns:**
    * "Kenapa hasil pencarian kosong?"
    * "Kenapa arsip tidak ditemukan saat difilter?"
    * "Kenapa data tidak muncul di tabel?"
* **Responses:** Hasil kosong dapat terjadi karena kata kunci tidak cocok, filter terlalu sempit, data belum tersedia, atau arsip tidak termasuk dalam cakupan akses akun.

## 14. Intent: preview_download_issue
* **Tags:** `preview_dokumen`, `download_file`, `dokumen_pendukung`
* **Patterns:**
    * "Kenapa dokumen tidak bisa dipreview?"
    * "Kenapa file hanya bisa diunduh?"
    * "Apakah semua dokumen bisa dipreview?"
* **Responses:** Preview biasanya tersedia untuk PDF dan gambar. Format lain seperti DOCX atau XLSX dapat diunduh sesuai ketersediaan file.

## 15. Intent: dashboard_statistics
* **Tags:** `dashboard_error`, `statistik_visual`, `grafik_kosong`
* **Patterns:**
    * "Kenapa statistik tidak sesuai dengan jumlah arsip?"
    * "Kenapa grafik dashboard kosong?"
    * "Apakah dashboard menampilkan data semua unit?"
* **Responses:** Statistik mengikuti data terbaru, filter yang aktif, dan cakupan akses akun. Jika grafik kosong, periksa filter Tahun, Unit Kerja, Status, atau ketersediaan data arsip.

## 16. Intent: dashboard_realtime_update
* **Tags:** `dashboard_update`, `data_terbaru`, `statistik_real_time`
* **Patterns:**
    * "Apakah dashboard diperbarui otomatis?"
    * "Kenapa statistik berubah setelah data ditambah?"
    * "Apakah data dashboard mengikuti arsip terbaru?"
* **Responses:** Dashboard diperbarui berdasarkan data arsip terbaru yang tersimpan pada sistem. Perubahan statistik dapat terjadi setelah data ditambah, diedit, dihapus, atau difilter.

## 17. Intent: export_excel_availability
* **Tags:** `export_excel`, `rekap_data`, `laporan_excel`
* **Patterns:**
    * "Siapa saja yang bisa export Excel?"
    * "Apakah User publik bisa export Excel?"
    * "Apakah hasil filter bisa diekspor?"
* **Responses:** Export Excel tersedia untuk pengguna internal yang berwenang. Data yang diekspor dapat mengikuti pencarian, filter, dan cakupan akses akun.

## 18. Intent: export_excel_problem
* **Tags:** `export_gagal`, `laporan_excel`, `download_rekap`
* **Patterns:**
    * "Kenapa export Excel gagal?"
    * "Kenapa file rekap tidak terunduh?"
    * "Kenapa tombol export tidak muncul?"
* **Responses:** Export dapat gagal jika tidak memiliki hak akses, data hasil filter kosong, sesi login berakhir, atau terjadi kendala browser/koneksi saat mengunduh file.

## 19. Intent: technical_error_403
* **Tags:** `error_403`, `akses_ditolak`, `forbidden`
* **Patterns:**
    * "Apa maksud Error 403 Forbidden?"
    * "Muncul pesan akses ditolak saat membuka halaman."
    * "Kenapa saya tidak boleh mengakses fitur tertentu?"
* **Responses:** Error 403 berarti pengguna mencoba membuka halaman atau melakukan aksi di luar kewenangan role, belum login, atau sesi login sudah tidak valid.

## 20. Intent: edit_delete_denied
* **Tags:** `edit_ditolak`, `hapus_ditolak`, `izin_akses`
* **Patterns:**
    * "Kenapa saya tidak bisa edit arsip?"
    * "Kenapa saya tidak bisa menghapus data?"
    * "Kenapa aksi edit atau hapus ditolak?"
* **Responses:** Edit atau hapus ditolak jika arsip berada di luar cakupan akses akun, pengguna bukan pemilik/role yang berwenang, atau sesi login sudah tidak aktif.

## 21. Intent: delete_permanent_warning
* **Tags:** `hapus_permanen`, `recycle_bin`, `pemulihan_data`
* **Patterns:**
    * "Apakah data yang dihapus bisa dikembalikan?"
    * "Apakah sistem punya recycle bin?"
    * "Apa yang terjadi jika arsip dihapus?"
* **Responses:** Penghapusan arsip bersifat permanen. Sistem tidak menyediakan recycle bin, sehingga data yang dihapus tidak dapat dipulihkan melalui sistem.

## 22. Intent: account_status_issue
* **Tags:** `status_akun`, `akun_nonaktif`, `akses_login`
* **Patterns:**
    * "Kenapa akun saya tidak aktif?"
    * "Kenapa akun internal tidak bisa digunakan?"
    * "Apa pengaruh status akun terhadap login?"
* **Responses:** Akun internal perlu berstatus aktif agar dapat digunakan. Jika akun nonaktif atau bermasalah, hubungi Super Admin untuk pemeriksaan akun.

## 23. Intent: account_management_general
* **Tags:** `kelola_akun`, `akun_internal`, `reset_password`
* **Patterns:**
    * "Siapa yang mengelola akun pengguna?"
    * "Siapa yang bisa membuat akun Unit atau PPK?"
    * "Siapa yang bisa reset password?"
* **Responses:** Akun internal Unit dan PPK dikelola oleh Super Admin. Reset password juga dilakukan oleh Super Admin jika pengguna lupa password.

## 24. Intent: master_data_general
* **Tags:** `master_data`, `kelola_menu`, `dropdown_sistem`
* **Patterns:**
    * "Apa saja yang dikelola melalui Master Data?"
    * "Apa isi menu Kelola Menu?"
    * "Dropdown apa saja yang bisa diatur?"
* **Responses:** Master Data digunakan untuk mengelola pilihan dropdown sistem seperti Tahun, Unit Kerja, Status Pekerjaan, dan Jenis Pengadaan.

## 25. Intent: system_registered_entities
* **Tags:** `jumlah_unit`, `jumlah_ppk`, `data_sistem`
* **Patterns:**
    * "Berapa jumlah unit yang terdaftar?"
    * "Berapa banyak PPK yang memiliki akses?"
    * "Ada berapa Unit Kerja di sistem?"
* **Responses:** Sistem mencatat 27 Unit Kerja dan 6 PPK sebagai pengguna internal sesuai data yang tersedia pada dataset sistem.

## 26. Intent: ai_chatbot_capabilities
* **Tags:** `ai_chatbot`, `nlp`, `kemampuan_chatbot`
* **Patterns:**
    * "Bagaimana cara kerja AI Chatbot SIAPABAJA?"
    * "Apa yang bisa dijawab chatbot?"
    * "Apakah chatbot menjawab berdasarkan data sistem?"
* **Responses:** Chatbot SIAPABAJA menggunakan pendekatan NLP untuk memahami pertanyaan dan menjawab berdasarkan dataset sistem, metadata, serta regulasi yang tersedia.

## 27. Intent: ai_chatbot_document_limit
* **Tags:** `chatbot_pdf`, `batasan_chatbot`, `isi_dokumen`
* **Patterns:**
    * "Apakah chatbot bisa membaca isi PDF?"
    * "Apakah chatbot membaca seluruh isi dokumen?"
    * "Kenapa chatbot tidak menjawab isi file dokumen?"
* **Responses:** Saat ini chatbot belum membaca seluruh isi file seperti PDF, DOCX, atau XLSX. Jawaban difokuskan pada metadata, fitur, role, workflow, dan informasi yang ada di dataset sistem.

## 28. Intent: maintenance_or_system_error
* **Tags:** `error_sistem`, `maintenance`, `kendala_aplikasi`
* **Patterns:**
    * "Apa yang harus dilakukan jika sistem error?"
    * "Kenapa halaman tidak bisa dibuka?"
    * "Kenapa sistem tidak merespons?"
* **Responses:** Periksa koneksi internet, refresh halaman, dan login ulang jika diperlukan. Jika masalah tetap terjadi, hubungi pengelola sistem atau Super Admin.

## 29. Intent: activity_history_access_general
* **Tags:** `histori_aktivitas`, `akses_histori`, `log_aktivitas`, `pengguna_internal`
* **Patterns:**
    * "Siapa saja yang bisa melihat histori aktivitas?"
    * "Apakah semua role bisa melihat histori aktivitas?"
    * "Apa perbedaan akses histori aktivitas Unit, PPK, dan Super Admin?"
    * "Kenapa saya tidak bisa melihat histori aktivitas?"
    * "Apakah histori aktivitas tersedia untuk pengunjung?"
* **Responses:** Histori Aktivitas tersedia untuk pengguna internal. Unit hanya dapat melihat histori aktivitas arsip milik unitnya sendiri. PPK dan Super Admin dapat melihat histori aktivitas arsip milik semua role. User publik tidak dapat melihat Histori Aktivitas.

## 30. Intent: activity_history_export_general
* **Tags:** `export_histori`, `xlsx`, `download_histori`, `riwayat_aktivitas`
* **Patterns:**
    * "Siapa saja yang bisa export histori aktivitas?"
    * "Apakah histori aktivitas bisa diexport ke XLSX?"
    * "Apa perbedaan export histori Unit, PPK, dan Super Admin?"
    * "Kenapa export histori aktivitas tidak muncul?"
    * "Kenapa saya tidak bisa download histori aktivitas?"
* **Responses:** Export Histori Aktivitas tersedia dalam format XLSX untuk pengguna internal yang berwenang. Unit hanya dapat mengekspor histori aktivitas arsip milik unitnya sendiri. PPK dan Super Admin dapat mengekspor histori aktivitas arsip milik semua role. User publik tidak memiliki akses export Histori Aktivitas.