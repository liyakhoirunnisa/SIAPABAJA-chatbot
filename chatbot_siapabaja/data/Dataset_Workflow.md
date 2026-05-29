---
dataset: Dataset_Workflow_Baru
fokus: Cara menggunakan fitur SIAPABAJA
deskripsi: Dataset ini berisi alur penggunaan fitur secara ringkas, tanpa pembahasan hak akses role secara panjang.
total_intent: 38
---

## 1. Intent: lihat_landing
* **Tags:** `landing_page`, `halaman_utama`, `akses_awal`
* **Patterns:**
    * "Bagaimana melihat halaman awal?"
    * "Bagaimana membuka landing page?"
    * "Bagaimana masuk ke halaman utama SIAPABAJA?"
* **Responses:**
1. Buka alamat sistem SIAPABAJA melalui browser.
2. Sistem menampilkan landing page berisi ringkasan arsip, statistik, regulasi, dan akses menuju Arsip PBJ publik.

## 2. Intent: buka_regulasi_kontak
* **Tags:** `navbar_public`, `regulasi`, `kontak`, `akses_publik`
* **Patterns:**
    * "Bagaimana membuka halaman regulasi?"
    * "Di mana menu kontak?"
    * "Bagaimana melihat informasi regulasi atau kontak?"
* **Responses:**
1. Buka landing page SIAPABAJA.
2. Klik menu Regulasi atau Kontak pada navbar.
3. Sistem menampilkan halaman sesuai menu yang dipilih.

## 3. Intent: login
* **Tags:** `login`, `autentikasi`, `masuk_sistem`
* **Patterns:**
    * "Bagaimana cara login ke sistem?"
    * "Bagaimana masuk ke dashboard?"
    * "Bagaimana cara masuk sebagai pengguna internal?"
* **Responses:**
1. Buka landing page SIAPABAJA.
2. Klik tombol Masuk pada navbar.
3. Isi email dan password.
4. Verifikasi Google reCAPTCHA jika diminta.
5. Klik Login untuk masuk ke dashboard.

## 4. Intent: logout
* **Tags:** `logout`, `keluar_akun`, `akhir_sesi`
* **Patterns:**
    * "Bagaimana cara logout?"
    * "Bagaimana cara keluar akun?"
    * "Bagaimana mengakhiri sesi login?"
* **Responses:**
1. Klik tombol Keluar di bagian bawah sidebar.
2. Klik konfirmasi jika pop-up muncul.
3. Sistem mengakhiri sesi dan mengarahkan kembali ke landing page.

## 5. Intent: dashboard
* **Tags:** `dashboard`, `statistik`, `monitoring_data`
* **Patterns:**
    * "Bagaimana menuju halaman dashboard?"
    * "Di mana melihat statistik arsip?"
    * "Bagaimana membuka dashboard SIAPABAJA?"
* **Responses:**
1. Login ke sistem.
2. Klik menu Dashboard pada sidebar.
3. Sistem menampilkan kartu statistik dan grafik sesuai data yang dapat diakses akun.

## 6. Intent: dashboard_filter
* **Tags:** `filter_dashboard`, `grafik_dashboard`, `statistik_interaktif`
* **Patterns:**
    * "Bagaimana memfilter dashboard?"
    * "Bagaimana melihat statistik berdasarkan tahun?"
    * "Kenapa grafik berubah setelah filter dipilih?"
* **Responses:**
1. Buka halaman Dashboard.
2. Pilih filter yang tersedia, seperti Tahun atau Unit Kerja.
3. Statistik dan grafik akan menyesuaikan data berdasarkan filter yang dipilih.

## 7. Intent: lihat_arsip
* **Tags:** `arsip_pbj`, `daftar_arsip`, `tabel_pengadaan`
* **Patterns:**
    * "Bagaimana cara melihat arsip?"
    * "Bagaimana melihat data pengadaan?"
    * "Daftar arsip ada di mana?"
* **Responses:**
1. Buka menu Arsip PBJ.
2. Sistem menampilkan tabel arsip pengadaan.
3. Jika belum login, data yang tampil hanya arsip publik. Jika sudah login, data mengikuti akses akun.

## 8. Intent: search_arsip
* **Tags:** `cari_arsip`, `pencarian_data`, `search_pengadaan`
* **Patterns:**
    * "Bagaimana cara mencari arsip?"
    * "Bagaimana search arsip?"
    * "Bagaimana mencari data pengadaan tertentu?"
* **Responses:**
1. Masuk ke halaman Arsip PBJ.
2. Gunakan kolom pencarian di bagian atas tabel.
3. Ketik kata kunci yang ingin dicari.
4. Sistem menampilkan arsip yang sesuai dengan kata kunci.

## 9. Intent: filter_sort_arsip
* **Tags:** `filter_arsip`, `sort_arsip`, `saring_data`
* **Patterns:**
    * "Bagaimana cara filter arsip?"
    * "Bagaimana filter berdasarkan tahun atau status?"
    * "Bagaimana mengurutkan data arsip?"
* **Responses:**
1. Masuk ke halaman Arsip PBJ.
2. Pilih filter yang tersedia, seperti Tahun, Unit Kerja, atau Status.
3. Gunakan fitur pengurutan tabel jika tersedia.
4. Reset atau refresh filter untuk kembali ke daftar awal.

## 10. Intent: detail_arsip
* **Tags:** `detail_arsip`, `informasi_lengkap`, `buka_data`
* **Patterns:**
    * "Bagaimana melihat detail arsip?"
    * "Bagaimana membuka data arsip?"
    * "Bagaimana melihat informasi lengkap pengadaan?"
* **Responses:**
1. Masuk ke halaman Arsip PBJ.
2. Pilih data arsip yang ingin dilihat.
3. Klik ikon detail atau ikon informasi pada kolom aksi.
4. Sistem menampilkan informasi lengkap arsip dan dokumen pendukung.

## 11. Intent: preview_unduh_dokumen
* **Tags:** `preview_dokumen`, `download_dokumen`, `dokumen_pendukung`
* **Patterns:**
    * "Bagaimana cara preview dokumen?"
    * "Bagaimana cara unduh dokumen arsip?"
    * "Bagaimana membuka file dokumen pendukung?"
* **Responses:**
1. Buka halaman detail arsip.
2. Pilih dokumen pendukung yang tersedia.
3. File PDF dan gambar dapat dipreview.
4. Format dokumen lain dapat diunduh sesuai ketersediaan file.

## 12. Intent: export_excel
* **Tags:** `export_excel`, `rekap_data`, `laporan_excel`
* **Patterns:**
    * "Bagaimana cara export data?"
    * "Bagaimana cara unduh rekap Excel?"
    * "Bagaimana export arsip sesuai filter?"
* **Responses:**
1. Masuk ke halaman Arsip PBJ.
2. Gunakan pencarian atau filter jika diperlukan.
3. Klik tombol Ekspor Excel.
4. Sistem mengunduh file rekapitulasi sesuai data yang tampil dan akses akun.

## 13. Intent: tambah_arsip
* **Tags:** `tambah_arsip`, `input_pengadaan`, `form_pengadaan`
* **Patterns:**
    * "Bagaimana cara tambah arsip?"
    * "Bagaimana cara input pengadaan baru?"
    * "Bagaimana mengisi form pengadaan?"
* **Responses:**
1. Klik menu Tambah Pengadaan pada sidebar.
2. Isi Informasi Umum, Status Akses Arsip, dan Informasi Anggaran.
3. Unggah dokumen pendukung sesuai kategori.
4. Centang Dokumen Tidak Dipersyaratkan jika ada berkas yang tidak wajib diunggah.
5. Klik **Simpan**.

## 14. Intent: upload_dokumen
* **Tags:** `upload_dokumen`, `unggah_file`, `lampiran_pengadaan`
* **Patterns:**
    * "Bagaimana cara upload dokumen pengadaan?"
    * "Bagaimana mengunggah file pendukung?"
    * "Apa langkah upload dokumen?"
* **Responses:**
1. Pada form pengadaan, buka bagian Dokumen Pengadaan.
2. Pilih kategori dokumen.
3. Klik Pilih File dan pilih dokumen yang akan diunggah.
4. Pastikan format dan ukuran file sesuai ketentuan sistem.
5. Klik Simpan pada form utama.

## 15. Intent: dokumen_tidak_dipersyaratkan
* **Tags:** `dokumen_tidak_dipersyaratkan`, `berkas_opsional`, `form_pengadaan`
* **Patterns:**
    * "Bagaimana jika ada dokumen yang tidak wajib diunggah?"
    * "Apa yang dilakukan jika dokumen tidak dipersyaratkan?"
    * "Bagaimana menandai berkas yang tidak wajib?"
* **Responses:**
1. Buka bagian Dokumen Pengadaan pada form arsip.
2. Cari kategori dokumen yang tidak wajib diunggah.
3. Centang opsi Dokumen Tidak Dipersyaratkan.
4. Lanjutkan pengisian form, lalu klik Simpan.

## 16. Intent: edit_arsip
* **Tags:** `edit_arsip`, `ubah_data`, `update_metadata`
* **Patterns:**
    * "Bagaimana cara edit arsip?"
    * "Bagaimana mengubah data pengadaan?"
    * "Bagaimana mengupdate arsip?"
* **Responses:**
1. Masuk ke halaman Arsip PBJ.
2. Cari arsip yang ingin diubah.
3. Klik ikon edit atau ikon pensil pada kolom aksi.
4. Ubah metadata atau dokumen yang diperlukan.
5. Klik Simpan.

## 17. Intent: change_archive_status
* **Tags:** `ubah_status`, `publik_privat`, `status_akses_arsip`
* **Patterns:**
    * "Bagaimana mengubah arsip publik menjadi privat?"
    * "Bagaimana cara mengubah arsip publik menjadi privat?"
    * "Bagaimana mengubah arsip privat menjadi publik?"
    * "Bagaimana cara mengubah status akses arsip?"
    * "Saya salah mengatur status dokumen, bagaimana memperbaikinya?"
* **Responses:**
1. Masuk ke halaman Arsip PBJ.
2. Cari arsip yang ingin diubah statusnya.
3. Klik ikon edit pada baris arsip.
4. Ubah bagian Status Akses Arsip menjadi Publik atau Privat.
5. Klik Simpan.

## 18. Intent: hapus_file_dokumen
* **Tags:** `hapus_file`, `dokumen_pendukung`, `lampiran_arsip`
* **Patterns:**
    * "Bagaimana menghapus dokumen pendukung?"
    * "Bisa hapus lampiran tanpa hapus arsip?"
    * "Bagaimana hapus satu file dokumen?"
* **Responses:**
1. Buka halaman detail atau edit arsip.
2. Cari dokumen pendukung yang ingin dihapus.
3. Klik tombol hapus pada dokumen tersebut jika tersedia.
4. Konfirmasi penghapusan.
5. Data arsip utama tetap ada, tetapi file dokumen terhapus permanen.

## 19. Intent: delete_arsip
* **Tags:** `hapus_arsip`, `delete_arsip`, `hapus_permanen`
* **Patterns:**
    * "Bagaimana cara hapus arsip?"
    * "Bagaimana delete arsip?"
    * "Bagaimana menghapus data permanen?"
* **Responses:**
1. Masuk ke halaman Arsip PBJ.
2. Cari arsip yang ingin dihapus.
3. Klik ikon hapus pada kolom aksi.
4. Baca peringatan penghapusan.
5. Klik konfirmasi jika data sudah benar.

## 20. Intent: kelola_akun_pribadi
* **Tags:** `kelola_akun`, `edit_profil`, `ganti_password`
* **Patterns:**
    * "Bagaimana cara ubah akun saya?"
    * "Bagaimana cara ganti password?"
    * "Bagaimana edit profil pribadi?"
* **Responses:**
1. Login ke sistem.
2. Buka menu Kelola Akun pada sidebar.
3. Ubah nama atau email jika diperlukan.
4. Untuk ganti password, isi password saat ini, password baru, dan konfirmasi password baru.
5. Klik Simpan Perubahan.

## 21. Intent: reset_password_akun_internal
* **Tags:** `reset_password`, `lupa_password`, `kelola_akun`
* **Patterns:**
    * "Bagaimana reset password akun Unit?"
    * "Bagaimana reset password akun PPK?"
    * "Bagaimana jika pengguna internal lupa password?"
* **Responses:**
1. Login sebagai Super Admin.
2. Buka menu Kelola Akun.
3. Pilih akun Unit atau PPK yang perlu diperbarui.
4. Ubah atau reset password melalui form akun.
5. Simpan perubahan sesuai prosedur internal.

## 22. Intent: kelola_menu
* **Tags:** `kelola_menu`, `master_data`, `dropdown_sistem`
* **Patterns:**
    * "Bagaimana mengelola daftar unit kerja?"
    * "Bagaimana membuka Kelola Menu?"
    * "Bagaimana mengelola master data?"
* **Responses:**
1. Login sebagai Super Admin.
2. Klik menu Kelola Menu pada sidebar.
3. Pilih kategori master data, seperti Tahun, Unit Kerja, Status Pekerjaan, atau Jenis Pengadaan.
4. Sistem menampilkan tabel data yang dapat dikelola.

## 23. Intent: tambah_master_data
* **Tags:** `tambah_master_data`, `input_dropdown`, `kelola_menu`
* **Patterns:**
    * "Bagaimana cara tambah tahun?"
    * "Bagaimana cara tambah unit kerja?"
    * "Bagaimana input data dropdown?"
* **Responses:**
1. Login sebagai Super Admin.
2. Buka menu Kelola Menu.
3. Pilih kategori master data.
4. Klik tombol Tambah.
5. Isi form yang muncul.
6. Klik Simpan.

## 24. Intent: edit_master_data
* **Tags:** `edit_master_data`, `update_dropdown`, `kelola_menu`
* **Patterns:**
    * "Bagaimana cara edit tahun?"
    * "Bagaimana cara ubah unit kerja?"
    * "Bagaimana update jenis pengadaan?"
* **Responses:**
1. Login sebagai Super Admin.
2. Buka menu Kelola Menu.
3. Pilih kategori master data.
4. Klik tombol Edit pada data yang ingin diubah.
5. Ubah isi form.
6. Klik Simpan.

## 25. Intent: hapus_master_data
* **Tags:** `hapus_master_data`, `delete_dropdown`, `kelola_menu`
* **Patterns:**
    * "Bagaimana cara hapus tahun?"
    * "Bagaimana cara hapus unit kerja?"
    * "Bagaimana menghapus data dropdown?"
* **Responses:**
1. Login sebagai Super Admin.
2. Buka menu Kelola Menu.
3. Pilih kategori master data. 
4. Klik tombol Hapus pada data yang ingin dihapus.
5. Klik konfirmasi jika pop-up muncul.
6. Tabel diperbarui setelah data dihapus.

## 26. Intent: toggle_master_data
* **Tags:** `status_master_data`, `aktif_nonaktif`, `kelola_menu`
* **Patterns:**
    * "Bagaimana mengaktifkan master data?"
    * "Bagaimana menonaktifkan data dropdown?"
    * "Bagaimana mengubah status master data?"
* **Responses:**
1. Login sebagai Super Admin. 
2. Buka menu Kelola Menu.
3. Pilih kategori master data.
4. Cari data yang ingin diaktifkan atau dinonaktifkan.
5. Ubah status data melalui tombol atau aksi status yang tersedia.
6. Data aktif akan muncul sebagai pilihan pada sistem.

## 27. Intent: kelola_akun_ppk
* **Tags:** `kelola_akun_ppk`, `manajemen_ppk`, `akun_internal`
* **Patterns:**
    * "Bagaimana mengelola akun PPK?"
    * "Bagaimana membuka daftar akun PPK?"
    * "Di mana melihat akun PPK?"
* **Responses:**
1. Login sebagai Super Admin.
2. Klik menu Kelola Akun pada sidebar.
3. Pilih bagian Kelola Akun PPK.
4. Sistem menampilkan tabel akun PPK beserta aksi yang tersedia.

## 28. Intent: tambah_admin_ppk
* **Tags:** `tambah_akun_ppk`, `buat_akun_ppk`, `registrasi_ppk`
* **Patterns:**
    * "Bagaimana tambah admin PPK?"
    * "Bagaimana cara buat akun PPK?"
    * "Bagaimana mendaftarkan akun PPK?"
* **Responses:**
1. Buka bagian Kelola Akun PPK.
2. Klik tombol Tambah Admin.
3. Isi username, unit kerja, email, password, dan status akun.
4. Klik Simpan.

## 29. Intent: edit_admin_ppk
* **Tags:** `edit_akun_ppk`, `update_ppk`, `kelola_akun_ppk`
* **Patterns:**
    * "Bagaimana edit admin PPK?"
    * "Bagaimana ubah akun PPK?"
    * "Bagaimana memperbarui data PPK?"
* **Responses:**
1. Buka tabel Kelola Akun PPK.
2. Pilih akun yang ingin diubah.
3. Klik tombol Edit.
4. Ubah data yang diperlukan.
5. Klik Simpan.

## 30. Intent: hapus_admin_ppk
* **Tags:** `hapus_akun_ppk`, `delete_ppk`, `kelola_akun_ppk`
* **Patterns:**
    * "Bagaimana hapus admin PPK?"
    * "Bagaimana cara delete akun PPK?"
    * "Bagaimana menghapus akun PPK?"
* **Responses:**
1. Buka tabel Kelola Akun PPK.
2. Pilih akun yang ingin dihapus.
3. Klik tombol Hapus.
4. Klik konfirmasi jika data sudah benar.

## 31. Intent: kelola_akun_unit
* **Tags:** `kelola_akun_unit`, `manajemen_unit`, `akun_internal`
* **Patterns:**
    * "Bagaimana kelola admin Unit?"
    * "Bagaimana membuka daftar akun Unit?"
    * "Di mana melihat staf Unit?"
* **Responses:**
1. Login sebagai Super Admin.
2. Klik menu Kelola Akun pada sidebar.
3. Pilih bagian Kelola Akun Unit.
4. Sistem menampilkan tabel akun Unit beserta aksi yang tersedia.

## 32. Intent: tambah_pic_unit
* **Tags:** `tambah_akun_unit`, `tambah_pic`, `registrasi_unit`
* **Patterns:**
    * "Bagaimana menambah PIC Unit?"
    * "Bagaimana membuat akun Unit?"
    * "Bagaimana mendaftarkan staf Unit?"
* **Responses:**
1. Buka bagian Kelola Akun Unit.
2. Klik tombol Tambah PIC Unit atau tombol tambah yang tersedia.
3. Isi username, unit kerja, email, password, dan status akun.
4. Klik Simpan.

## 33. Intent: edit_pic_unit
* **Tags:** `edit_akun_unit`, `update_pic`, `kelola_akun_unit`
* **Patterns:**
    * "Bagaimana mengedit PIC Unit?"
    * "Bagaimana mengubah akun Unit?"
    * "Bagaimana memindah unit kerja akun?"
* **Responses:**
1. Buka tabel Kelola Akun Unit.
2. Pilih akun yang ingin diubah.
3. Klik tombol Edit.
4. Ubah data akun atau unit kerja jika diperlukan.
5. Klik Simpan.

## 34. Intent: hapus_pic_unit
* **Tags:** `hapus_akun_unit`, `hapus_pic`, `copot_akses_unit`
* **Patterns:**
    * "Bagaimana menghapus admin Unit?"
    * "Bagaimana menghapus akun Unit?"
    * "Bagaimana melepas akses Unit?"
* **Responses:**
1. Buka tabel Kelola Akun Unit.
2. Pilih akun Unit yang ingin dihapus.
3. Klik tombol Hapus.
4. Klik konfirmasi jika data sudah benar.

## 35. Intent: kembali
* **Tags:** `tombol_kembali`, `navigasi_awal`, `back_to_home`
* **Patterns:**
    * "Tombol kembali di mana?"
    * "Bagaimana cara kembali ke awal?"
    * "Bagaimana kembali ke halaman utama?"
* **Responses:**
1. Lihat bagian bawah sidebar.
2. Klik tombol Kembali.
3. Sistem mengarahkan pengguna ke halaman utama atau halaman home.

## 36. Intent: gunakan_chatbot
* **Tags:** `ai_chatbot`, `asisten_virtual`, `tanya_sistem`
* **Patterns:**
    * "Bagaimana menggunakan chatbot SIAPABAJA?"
    * "Bagaimana bertanya ke asisten virtual?"
    * "Bagaimana cara memakai AI Chatbot?"
* **Responses:**
1. Buka fitur AI Chatbot pada tampilan sistem jika tersedia.
2. Ketik pertanyaan tentang fitur, arsip, role, atau regulasi yang tersedia.
3. Kirim pertanyaan.
4. Gunakan kata kunci yang lebih spesifik jika jawaban belum sesuai.

## 37. Intent: validasi_form_simpan
* **Tags:** `validasi_form`, `gagal_simpan`, `metadata_wajib`
* **Patterns:**
    * "Apa yang dilakukan jika gagal menyimpan pengadaan?"
    * "Kenapa form pengadaan tidak bisa disimpan?"
    * "Bagaimana mengatasi data wajib belum lengkap?"
* **Responses:**
1. Periksa kembali seluruh isian wajib pada form.
2. Pastikan status arsip, metadata pengadaan, dan informasi anggaran sudah diisi.
3. Periksa format serta ukuran dokumen yang diunggah.
4. Simpan ulang setelah data diperbaiki.
