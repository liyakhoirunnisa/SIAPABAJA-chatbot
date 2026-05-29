---
dataset: Dataset_Arsitektur_Fitur_Baru
fokus: Fitur apa yang tersedia pada sistem SIAPABAJA
total_intent: 21
catatan: Dataset ini hanya menjelaskan fitur dan cakupan sistem. Detail langkah penggunaan ditempatkan pada Dataset_Workflow, sedangkan hak akses rinci ditempatkan pada Dataset_Role.
---

## 1. Intent: system_scope_and_boundaries
* **Tags:** `cakupan_sistem`, `arsitektur_umum`, `batasan_sistem`
* **Patterns:**
    * "Apa cakupan utama sistem SIAPABAJA?"
    * "SIAPABAJA digunakan untuk apa?"
    * "Apa batasan sistem SIAPABAJA?"
* **Responses:** SIAPABAJA adalah sistem web untuk pengelolaan arsip pengadaan. Sistem berfokus pada penyimpanan, pencarian, pengelolaan, dan penyajian arsip PBJ, bukan untuk transaksi pengadaan langsung. Sistem berjalan mandiri tanpa integrasi dengan sistem eksternal.

## 2. Intent: role_based_access_architecture
* **Tags:** `role_pengguna`, `akses_berbasis_role`, `struktur_pengguna`
* **Patterns:**
    * "Role apa saja yang ada di SIAPABAJA?"
    * "Apakah tampilan sistem berbeda berdasarkan role?"
    * "Bagaimana sistem membedakan pengguna?"
* **Responses:** SIAPABAJA menggunakan akses berbasis role untuk membedakan tampilan menu, cakupan data, dan aksi yang tersedia. Role utama dalam sistem adalah User publik, Unit, PPK, dan Super Admin. Detail kewenangan masing-masing role dijelaskan pada dataset Role.

## 3. Intent: landing_page_info
* **Tags:** `landing_page`, `halaman_utama`, `akses_publik`
* **Patterns:**
    * "Apa itu landing page pada sistem ini?"
    * "Apa fungsi utama landing page?"
    * "Informasi apa yang tampil di halaman utama?"
* **Responses:** Landing page adalah beranda publik SIAPABAJA yang dapat dibuka tanpa login. Halaman ini menampilkan ringkasan arsip pengadaan terbaru, statistik, regulasi, dan akses menuju halaman Arsip PBJ publik.

## 4. Intent: navigation_ui_system
* **Tags:** `navbar`, `sidebar`, `navigasi`, `menu_sistem`
* **Patterns:**
    * "Menu apa saja yang tersedia di sistem?"
    * "Apa fungsi navbar dan sidebar?"
    * "Apa perbedaan navigasi publik dan internal?"
* **Responses:** Navigasi publik menggunakan navbar yang memuat menu Regulasi, Arsip PBJ, Kontak, dan Masuk. Setelah login, pengguna internal mendapatkan sidebar untuk mengakses Dashboard, Arsip PBJ, Tambah Pengadaan, Kelola Akun, Kembali, dan Keluar. Menu khusus seperti Kelola Menu serta Kelola Akun Unit/PPK hanya muncul pada role yang berwenang.

## 5. Intent: authentication_session_feature
* **Tags:** `login`, `logout`, `autentikasi`, `keamanan_sesi`
* **Patterns:**
    * "Apakah sistem memiliki fitur login?"
    * "Apa fitur keamanan saat masuk sistem?"
    * "Apakah sistem memiliki logout?"
* **Responses:** SIAPABAJA memiliki fitur autentikasi untuk pengguna internal melalui email dan password. Sistem dapat menggunakan Google reCAPTCHA saat login dan menyediakan logout untuk mengakhiri sesi pengguna.

## 6. Intent: arsip_pbj_public_library
* **Tags:** `arsip_pbj_publik`, `pustaka_digital`, `akses_publik`
* **Patterns:**
    * "Apa itu halaman Arsip PBJ publik?"
    * "Arsip apa yang bisa dilihat tanpa login?"
    * "Apakah publik bisa melihat dokumen pengadaan?"
* **Responses:** Halaman Arsip PBJ publik berfungsi sebagai pustaka digital untuk arsip pengadaan yang berstatus Publik. Pengunjung dapat melihat daftar arsip, membuka detail, dan mengakses dokumen publik yang tersedia tanpa login.

## 7. Intent: arsip_pbj_internal_table
* **Tags:** `arsip_pbj_internal`, `tabel_arsip`, `data_pengadaan`
* **Patterns:**
    * "Apa isi tabel Arsip PBJ internal?"
    * "Data apa saja yang tampil pada daftar arsip?"
    * "Apa fitur utama halaman Arsip PBJ?"
* **Responses:** Halaman Arsip PBJ internal menampilkan tabel data pengadaan seperti Tahun, Unit Kerja, Nama Pekerjaan, Metode PBJ, Nilai Kontrak, dan Status Pekerjaan. Halaman ini menjadi pusat untuk melihat, mencari, memfilter, membuka detail, dan mengelola arsip sesuai akses pengguna.

## 8. Intent: archive_search_filter_feature
* **Tags:** `pencarian_arsip`, `filter_arsip`, `saring_data`
* **Patterns:**
    * "Apakah arsip bisa dicari?"
    * "Filter apa saja yang tersedia pada arsip?"
    * "Apakah data arsip bisa disaring?"
* **Responses:** Sistem menyediakan pencarian arsip menggunakan kata kunci dan filter data. Filter yang digunakan mencakup Tahun, Unit Kerja, Status, atau kategori lain yang tersedia pada tampilan sistem.

## 9. Intent: archive_detail_preview_download_feature
* **Tags:** `detail_arsip`, `preview_dokumen`, `unduh_dokumen`
* **Patterns:**
    * "Apakah arsip memiliki halaman detail?"
    * "Apakah dokumen bisa dipreview?"
    * "Apakah dokumen arsip bisa diunduh?"
* **Responses:** Sistem menyediakan halaman detail arsip untuk menampilkan informasi lengkap dan dokumen pendukung. File PDF dan gambar dapat ditampilkan sebagai pratinjau, sedangkan format lain dapat diunduh sesuai ketersediaan dokumen.

## 10. Intent: archive_management_feature
* **Tags:** `manajemen_arsip`, `crud_arsip`, `pengelolaan_pengadaan`
* **Patterns:**
    * "Fitur pengelolaan arsip apa saja yang tersedia?"
    * "Apakah sistem mendukung tambah edit hapus arsip?"
    * "Apa saja aksi pada data arsip?"
* **Responses:** SIAPABAJA menyediakan fitur pengelolaan arsip berupa tambah, lihat detail, edit, hapus, ubah status akses, dan kelola dokumen pendukung. Penghapusan arsip dan file pendukung bersifat permanen karena sistem tidak menyediakan recycle bin.

## 11. Intent: archive_metadata_feature
* **Tags:** `metadata_arsip`, `form_pengadaan`, `atribut_dokumen`
* **Patterns:**
    * "Metadata apa saja yang disimpan sistem?"
    * "Data apa saja yang ada pada arsip pengadaan?"
    * "Apa isi form pengadaan?"
* **Responses:** Metadata arsip mencakup Informasi Umum, Status Akses Arsip, dan Informasi Anggaran. Data yang disimpan meliputi Tahun, Unit Kerja, Nama Pekerjaan, ID RUP, Jenis Pengadaan, Metode Pengadaan, Status Pekerjaan, Pagu Anggaran, Nilai HPS, Nilai Kontrak, dan Nama Rekanan.

## 12. Intent: archive_access_status_feature
* **Tags:** `status_arsip`, `publik_privat`, `visibilitas_dokumen`
* **Patterns:**
    * "Apa itu status Publik dan Privat pada arsip?"
    * "Apakah status akses arsip bisa diatur?"
    * "Bagaimana sistem membedakan arsip publik dan privat?"
* **Responses:** Setiap arsip memiliki Status Akses Arsip berupa Publik atau Privat. Status Publik membuat arsip tampil pada halaman publik, sedangkan status Privat membatasi visibilitas arsip sesuai aturan akses sistem.

## 13. Intent: document_upload_feature
* **Tags:** `upload_dokumen`, `format_file`, `dokumen_pendukung`
* **Patterns:**
    * "Format dokumen apa saja yang didukung?"
    * "Berapa batas ukuran file upload?"
    * "Apakah sistem mendukung dokumen pendukung?"
* **Responses:** Sistem mendukung unggahan dokumen pendukung dalam format PDF, DOC, DOCX, XLS, XLSX, JPG, JPEG, dan PNG. Batas ukuran file adalah 10MB per file. Sistem juga menyediakan opsi Dokumen Tidak Dipersyaratkan jika ada berkas yang tidak wajib diunggah.

## 14. Intent: dashboard_management_system
* **Tags:** `dashboard`, `statistik_visual`, `monitoring_arsip`
* **Patterns:**
    * "Apa isi dashboard SIAPABAJA?"
    * "Statistik apa saja yang tersedia?"
    * "Apakah dashboard menampilkan visualisasi data?"
* **Responses:** Dashboard menampilkan ringkasan statistik arsip seperti Total Arsip, Arsip Publik, Arsip Privat, Total Paket Pengadaan, dan Total Nilai Pengadaan. Dashboard juga menyediakan visualisasi data berbentuk Grafik Donut untuk Status Pekerjaan dan Grafik Bar untuk Metode Pengadaan.

## 15. Intent: interactive_statistics_logic
* **Tags:** `filter_dashboard`, `grafik_dashboard`, `statistik_interaktif`
* **Patterns:**
    * "Apakah statistik dashboard bisa difilter?"
    * "Apa kategori grafik status pekerjaan?"
    * "Apakah data dashboard diperbarui otomatis?"
* **Responses:** Statistik dashboard dapat difilter berdasarkan Tahun dan Unit Kerja jika filter tersedia pada tampilan sistem. Grafik Status Pekerjaan membagi data ke dalam kategori Perencanaan, Pemilihan, Pelaksanaan, dan Selesai. Data dashboard diperbarui berdasarkan input arsip terbaru.

## 16. Intent: export_excel_feature
* **Tags:** `export_excel`, `rekap_data`, `laporan_pengadaan`
* **Patterns:**
    * "Apakah sistem memiliki fitur Export Excel?"
    * "Data apa yang bisa diekspor?"
    * "Apakah hasil filter bisa diekspor?"
* **Responses:** SIAPABAJA menyediakan fitur Ekspor Excel untuk mengunduh rekapitulasi arsip pengadaan. Data ekspor dapat mengikuti pencarian atau filter yang digunakan pada halaman Arsip PBJ.

## 17. Intent: master_data_management_feature
* **Tags:** `kelola_menu`, `master_data`, `dropdown_sistem`
* **Patterns:**
    * "Apa itu fitur Kelola Menu?"
    * "Master data apa saja yang tersedia?"
    * "Dropdown apa saja yang bisa dikelola?"
* **Responses:** Fitur Kelola Menu digunakan untuk mengelola master data yang menjadi pilihan dropdown sistem. Master data yang tersedia mencakup Tahun, Unit Kerja, Status Pekerjaan, dan Jenis Pengadaan. Data aktif digunakan pada form pengadaan dan tampilan dashboard.

## 18. Intent: account_management_feature
* **Tags:** `kelola_akun`, `manajemen_pengguna`, `akun_internal`
* **Patterns:**
    * "Apa itu fitur Kelola Akun?"
    * "Akun apa saja yang dikelola sistem?"
    * "Apakah sistem memiliki manajemen pengguna?"
* **Responses:** Fitur Kelola Akun digunakan untuk mengelola akun pengguna internal. Sistem menyimpan akun Unit dan PPK beserta data seperti username, unit kerja, email, password, dan status akun.

## 19. Intent: personal_account_feature
* **Tags:** `akun_pribadi`, `profil_pengguna`, `ganti_password`
* **Patterns:**
    * "Apakah pengguna bisa mengubah akun sendiri?"
    * "Apa isi fitur Kelola Akun Saya?"
    * "Apakah ada fitur ganti password?"
* **Responses:** Pengguna internal memiliki fitur Kelola Akun untuk memperbarui data pribadi seperti nama, email, dan password. Fitur ini digunakan untuk pengaturan akun pribadi setelah pengguna berhasil login.

## 20. Intent: ai_chatbot_capabilities
* **Tags:** `ai_chatbot`, `nlp`, `asisten_virtual`
* **Patterns:**
    * "Apa fitur AI Chatbot SIAPABAJA?"
    * "Bagaimana kemampuan chatbot SIAPABAJA?"
    * "Apakah chatbot membaca isi dokumen?"
* **Responses:** SIAPABAJA memiliki asisten virtual berbasis NLP untuk memahami pertanyaan pengguna berdasarkan metadata dan regulasi. Chatbot berfokus pada informasi yang tersedia di dataset sistem dan belum membaca seluruh isi file dokumen seperti PDF, DOCX, atau XLSX.

## 21. Intent: validation_security_message_feature
* **Tags:** `validasi_sistem`, `pesan_error`, `keamanan_akses`
* **Patterns:**
    * "Apakah sistem memiliki validasi akses?"
    * "Pesan sistem apa saja yang dapat muncul?"
    * "Apa fungsi validasi pada SIAPABAJA?"
* **Responses:** Sistem menyediakan validasi untuk login, kelengkapan metadata, format dan ukuran dokumen, status akun, serta akses berdasarkan role. Pesan seperti akses ditolak, Invalid Credentials, atau data wajib belum lengkap digunakan untuk menjaga keamanan dan konsistensi data.
