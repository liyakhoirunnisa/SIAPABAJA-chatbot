---
dataset: Dataset_Role_Unit_Baru
role: Unit
role_access: unit
fokus: Siapa boleh melakukan apa sesuai role Unit
deskripsi: Dataset ini menjelaskan kewenangan, cakupan akses, dan batasan role Unit tanpa memuat langkah penggunaan fitur secara rinci.
total_intent: 25
---

## 1. Intent: rbac_unit_access_overview
* **Tags:** `role_unit`, `hak_akses_unit`, `cakupan_unit`, `rbac_unit`
* **Patterns:**
    * "Apa hak akses role Unit?"
    * "Apa saja yang bisa dilakukan Unit?"
    * "Unit boleh melakukan apa di SIAPABAJA?"
    * "Apa kewenangan utama Unit?"
* **Responses:** Role Unit adalah pengguna internal yang berwenang mengelola arsip pengadaan milik unitnya sendiri. Unit dapat melihat dashboard, menambah arsip, mengedit arsip, menghapus arsip, mengunggah dokumen, mengubah status akses arsip, melihat detail dokumen, dan mengekspor data dalam cakupan unitnya sendiri.

## 2. Intent: unit_internal_login_access
* **Tags:** `akses_login_unit`, `akun_internal`, `dashboard_unit`, `role_unit`
* **Patterns:**
    * "Apakah Unit bisa login ke sistem?"
    * "Apakah Unit punya akun internal?"
    * "Apakah Unit bisa masuk dashboard?"
    * "Apakah Unit berbeda dari User publik?"
* **Responses:** Unit termasuk pengguna internal yang memiliki akun login dan akses dashboard. Berbeda dari User publik, Unit dapat masuk ke halaman internal untuk mengelola arsip sesuai unit kerjanya.

## 3. Intent: unit_archive_access_scope
* **Tags:** `cakupan_arsip_unit`, `arsip_unit`, `akses_data_unit`, `kepemilikan_unit`
* **Patterns:**
    * "Arsip siapa saja yang bisa diakses Unit?"
    * "Apakah Unit bisa melihat arsip sendiri?"
    * "Cakupan data Unit sampai mana?"
    * "Data apa yang bisa dikelola Unit?"
* **Responses:** Unit dapat mengakses arsip publik dan arsip privat yang berada dalam cakupan unitnya sendiri. Arsip milik Unit lain dan arsip milik PPK tidak termasuk dalam cakupan pengelolaan Unit.

## 4. Intent: unit_own_archive_crud
* **Tags:** `crud_unit_sendiri`, `arsip_unit_sendiri`, `kelola_arsip_unit`, `role_unit`
* **Patterns:**
    * "Apakah Unit bisa CRUD arsip sendiri?"
    * "Bisakah Unit mengedit arsip unitnya sendiri?"
    * "Bisakah Unit menghapus arsip miliknya sendiri?"
    * "Apakah Unit bisa mengelola arsip yang diunggah sendiri?"
* **Responses:** Unit dapat melakukan CRUD terhadap arsip yang berada dalam cakupan unitnya sendiri. Aksi tersebut mencakup melihat, menambah, mengedit, menghapus, mengunggah dokumen, dan mengubah status akses arsip.

## 5. Intent: unit_other_unit_restriction
* **Tags:** `arsip_unit_lain`, `batasan_unit`, `akses_ditolak_unit`, `kepemilikan_arsip`
* **Patterns:**
    * "Apakah Unit bisa melihat arsip Unit lain?"
    * "Apakah Unit bisa mengedit arsip Unit lain?"
    * "Apakah Unit bisa menghapus arsip Unit lain?"
    * "Kenapa Unit tidak bisa mengelola arsip Unit lain?"
* **Responses:** Unit tidak berwenang melihat arsip privat, mengedit, menghapus, atau mengubah arsip milik Unit lain. Setiap Unit dibatasi pada data arsip milik unit kerjanya sendiri.

## 6. Intent: unit_ppk_archive_restriction
* **Tags:** `arsip_ppk`, `akses_ppk_dilarang`, `batasan_unit`, `role_unit`
* **Patterns:**
    * "Apakah Unit bisa melihat arsip PPK?"
    * "Apakah Unit bisa mengedit arsip PPK?"
    * "Apakah Unit bisa menghapus arsip PPK?"
    * "Kenapa Unit tidak bisa akses arsip PPK?"
* **Responses:** Unit tidak memiliki kewenangan untuk melihat, mengedit, menghapus, atau mengubah arsip milik PPK. Arsip PPK berada di luar cakupan akses Unit.

## 7. Intent: unit_visibility_public_private
* **Tags:** `arsip_publik`, `arsip_privat`, `visibilitas_unit`, `hak_lihat_unit`
* **Patterns:**
    * "Apakah Unit bisa melihat arsip publik dan privat?"
    * "Siapa yang bisa melihat arsip privat unit saya?"
    * "Apakah Unit bisa melihat arsip privat Unit lain?"
    * "Apakah Unit bisa melihat arsip privat PPK?"
* **Responses:** Unit dapat melihat arsip Publik dan arsip Privat milik unitnya sendiri. Arsip Privat Unit lain dan arsip Privat PPK tidak dapat diakses oleh Unit.

## 8. Intent: unit_dashboard_scope
* **Tags:** `dashboard_unit`, `statistik_unit`, `cakupan_dashboard`, `monitoring_unit`
* **Patterns:**
    * "Apakah Unit punya dashboard sendiri?"
    * "Data apa yang tampil di dashboard Unit?"
    * "Apakah dashboard Unit menampilkan semua unit?"
    * "Kenapa statistik Unit hanya menampilkan data saya?"
* **Responses:** Unit memiliki dashboard internal untuk melihat statistik arsip dalam cakupan unitnya sendiri. Dashboard Unit tidak menampilkan statistik seluruh Unit, arsip PPK, atau data lintas unit yang berada di luar kewenangan Unit.

## 9. Intent: unit_menu_access
* **Tags:** `menu_unit`, `sidebar_unit`, `navigasi_unit`, `akses_menu_unit`
* **Patterns:**
    * "Menu apa saja untuk Unit?"
    * "Apa saja isi sidebar Unit?"
    * "Halaman apa saja yang bisa diakses Unit?"
    * "Apakah Unit punya menu Tambah Pengadaan?"
* **Responses:** Unit dapat mengakses menu internal seperti Dashboard, Arsip PBJ, Tambah Pengadaan, Kelola Akun pribadi, Kembali, dan Keluar. Menu administratif seperti Kelola Menu, Kelola Akun Unit, dan Kelola Akun PPK tidak tersedia untuk Unit.

## 10. Intent: unit_add_archive_permission
* **Tags:** `tambah_arsip_unit`, `input_pengadaan_unit`, `arsip_baru_unit`, `role_unit`
* **Patterns:**
    * "Apakah Unit bisa tambah arsip?"
    * "Apakah Unit bisa input pengadaan baru?"
    * "Arsip apa yang bisa ditambahkan Unit?"
    * "Apakah Unit bisa menambahkan arsip untuk unit lain?"
* **Responses:** Unit dapat menambahkan arsip pengadaan untuk unit kerjanya sendiri. Unit tidak dapat menambahkan arsip atas nama Unit lain atau PPK.

## 11. Intent: unit_upload_document_permission
* **Tags:** `upload_dokumen_unit`, `dokumen_pendukung`, `lampiran_arsip`, `role_unit`
* **Patterns:**
    * "Apakah Unit bisa upload dokumen?"
    * "Dokumen apa yang bisa diunggah Unit?"
    * "Apakah Unit bisa mengunggah lampiran arsip sendiri?"
    * "Apakah Unit bisa upload dokumen untuk arsip Unit lain?"
* **Responses:** Unit dapat mengunggah dokumen pendukung untuk arsip yang berada dalam cakupan unitnya sendiri. Unit tidak dapat mengunggah dokumen pada arsip milik Unit lain atau PPK.

## 12. Intent: unit_edit_archive_permission
* **Tags:** `edit_arsip_unit`, `ubah_data_unit`, `update_arsip`, `role_unit`
* **Patterns:**
    * "Apakah Unit bisa edit arsip?"
    * "Arsip apa saja yang bisa diedit Unit?"
    * "Bisakah Unit mengubah data pengadaan unitnya sendiri?"
    * "Kenapa Unit tidak bisa edit arsip tertentu?"
* **Responses:** Unit dapat mengedit arsip dalam cakupan unitnya sendiri. Jika arsip milik Unit lain, PPK, atau berada di luar cakupan unit tersebut, sistem akan membatasi akses edit.

## 13. Intent: unit_change_archive_status_permission
* **Tags:** `ubah_status_unit`, `publik_privat`, `status_akses`, `role_unit`
* **Patterns:**
    * "Apakah Unit bisa mengubah status arsip?"
    * "Apakah Unit bisa mengubah arsip publik menjadi privat?"
    * "Status arsip apa yang bisa diubah Unit?"
    * "Apakah Unit bisa mengubah status arsip Unit lain?"
* **Responses:** Unit dapat mengubah status akses Publik atau Privat pada arsip dalam cakupan unitnya sendiri. Unit tidak dapat mengubah status akses arsip milik Unit lain atau PPK.

## 14. Intent: unit_delete_archive_permission
* **Tags:** `hapus_arsip_unit`, `delete_arsip`, `hapus_permanen`, `role_unit`
* **Patterns:**
    * "Apakah Unit bisa hapus arsip?"
    * "Arsip apa yang bisa dihapus Unit?"
    * "Apakah Unit bisa menghapus arsip sendiri?"
    * "Apakah Unit bisa hapus arsip Unit lain atau PPK?"
* **Responses:** Unit dapat menghapus arsip dalam cakupan unitnya sendiri. Unit tidak dapat menghapus arsip milik Unit lain atau PPK. Penghapusan arsip bersifat permanen setelah dikonfirmasi oleh pengguna yang berwenang.

## 15. Intent: unit_bulk_delete_restriction
* **Tags:** `bulk_delete_unit`, `hapus_massal_unit`, `hapus_banyak_tidak_tersedia`, `role_unit`
* **Patterns:**
    * "Apakah Unit bisa menghapus banyak arsip sekaligus?"
    * "Apakah Unit punya fitur bulk delete?"
    * "Apakah Unit bisa hapus massal?"
    * "Kenapa tombol Hapus Terpilih tidak ada untuk Unit?"
    * "Apakah Unit bisa menghapus arsip secara massal?"
* **Responses:** Saat ini role Unit tidak memiliki fitur hapus massal atau bulk delete.

## 16. Intent: unit_document_access_permission
* **Tags:** `preview_dokumen_unit`, `download_dokumen_unit`, `akses_file_unit`, `role_unit`
* **Patterns:**
    * "Apakah Unit bisa membuka dokumen arsip?"
    * "Apakah Unit bisa download dokumen pengadaan?"
    * "Dokumen apa saja yang bisa dilihat Unit?"
    * "Kenapa Unit tidak bisa membuka dokumen tertentu?"
* **Responses:** Unit dapat membuka, mempreview, atau mengunduh dokumen pada arsip dalam cakupan unitnya sendiri. Dokumen pada arsip milik Unit lain atau PPK tidak termasuk dalam cakupan akses Unit.

## 17. Intent: unit_delete_document_permission
* **Tags:** `hapus_file_unit`, `hapus_lampiran`, `dokumen_pendukung`, `role_unit`
* **Patterns:**
    * "Apakah Unit bisa hapus file lampiran?"
    * "Bisakah Unit hapus dokumen tanpa hapus arsip?"
    * "File dokumen apa yang bisa dihapus Unit?"
    * "Kenapa Unit tidak bisa hapus dokumen tertentu?"
* **Responses:** Unit dapat menghapus file lampiran pada arsip dalam cakupan unitnya sendiri. Penghapusan lampiran tidak menghapus data arsip utama, tetapi file yang dihapus tetap bersifat permanen.

## 18. Intent: unit_export_excel_permission
* **Tags:** `export_excel_unit`, `rekap_unit`, `laporan_unit`, `role_unit`
* **Patterns:**
    * "Apakah Unit bisa export Excel?"
    * "Data apa yang bisa diekspor Unit?"
    * "Apakah Unit bisa unduh rekap unitnya sendiri?"
    * "Apakah Unit bisa export data lintas unit?"
* **Responses:** Unit dapat melakukan Ekspor Excel untuk rekapitulasi arsip dalam cakupan unitnya sendiri. Unit tidak dapat mengekspor data lintas Unit atau arsip milik PPK.

## 19. Intent: unit_personal_account_permission
* **Tags:** `akun_pribadi_unit`, `edit_profil_unit`, `ganti_password`, `role_unit`
* **Patterns:**
    * "Apakah Unit bisa mengubah akun sendiri?"
    * "Apakah Unit bisa ganti password sendiri?"
    * "Apakah Unit bisa mengubah email akunnya?"
    * "Apa saja yang bisa dikelola Unit pada akun pribadi?"
* **Responses:** Unit dapat mengelola akun pribadinya sendiri, seperti mengubah nama, email, dan password selama masih mengetahui password saat ini. Jika lupa password atau tidak dapat login, reset password harus dibantu oleh Super Admin.

## 20. Intent: unit_account_management_restriction
* **Tags:** `kelola_akun_dilarang`, `akun_unit`, `akun_ppk`, `role_unit`
* **Patterns:**
    * "Apakah Unit bisa membuat akun baru?"
    * "Apakah Unit bisa mengelola akun Unit lain?"
    * "Apakah Unit bisa menghapus akun pengguna lain?"
    * "Apakah Unit bisa reset password akun lain?"
* **Responses:** Unit tidak dapat membuat, mengedit, menghapus, mengubah status, atau mereset password akun pengguna lain. Pengelolaan akun Unit dan PPK hanya menjadi kewenangan Super Admin.

## 21. Intent: unit_master_data_restriction
* **Tags:** `kelola_menu_dilarang`, `master_data`, `dropdown_sistem`, `role_unit`
* **Patterns:**
    * "Apakah Unit bisa Kelola Menu?"
    * "Apakah Unit bisa mengubah master data?"
    * "Apakah Unit bisa tambah tahun atau unit kerja?"
    * "Kenapa Unit tidak bisa akses Kelola Menu?"
* **Responses:** Unit tidak memiliki akses ke menu Kelola Menu atau pengaturan master data. Pengelolaan data dropdown seperti Tahun, Unit Kerja, Status Pekerjaan, dan Jenis Pengadaan hanya tersedia untuk Super Admin.

## 22. Intent: unit_archive_supervision_scope
* **Tags:** `pengawasan_arsip_unit`, `ppk_super_admin`, `arsip_unit`, `role_unit`
* **Patterns:**
    * "Siapa yang bisa mengawasi arsip Unit?"
    * "Apakah PPK bisa mengelola arsip Unit?"
    * "Apakah Super Admin bisa mengelola arsip Unit?"
    * "Apakah arsip Unit bisa diperiksa role lain?"
* **Responses:** Arsip Unit berada dalam cakupan pengawasan PPK dan Super Admin. PPK dapat mengelola arsip Unit untuk kebutuhan pengawasan, sedangkan Super Admin memiliki kewenangan penuh terhadap seluruh arsip sistem.

## 23. Intent: unit_metadata_permission
* **Tags:** `metadata_unit`, `input_data_unit`, `atribut_arsip`, `role_unit`
* **Patterns:**
    * "Apakah Unit bisa mengisi metadata arsip?"
    * "Data arsip apa yang bisa diisi Unit?"
    * "Apakah Unit bisa mengubah informasi pengadaan?"
    * "Apakah Unit bisa mengubah pilihan master data?"
* **Responses:** Unit dapat mengisi dan memperbarui metadata arsip dalam cakupan unitnya sendiri, seperti informasi pengadaan, status akses, dan informasi anggaran. Unit hanya menggunakan pilihan master data yang tersedia dan tidak dapat mengubah master data sistem.

## 24. Intent: unit_access_denied_reason
* **Tags:** `akses_ditolak_unit`, `error_403`, `batasan_role`, `role_unit`
* **Patterns:**
    * "Kenapa Unit mendapat akses ditolak?"
    * "Apa maksud Error 403 untuk Unit?"
    * "Kenapa Unit tidak bisa edit atau hapus arsip?"
    * "Kenapa tombol aksi tidak muncul untuk Unit?"
* **Responses:** Akses ditolak muncul ketika Unit mencoba membuka halaman atau melakukan aksi di luar kewenangannya. Contohnya adalah mengakses arsip privat Unit lain, mengelola arsip PPK, membuka fitur Super Admin, mengelola akun pengguna lain, atau mengubah master data.

## 25. Intent: unit_activity_history_access
* **Tags:** `histori_aktivitas_unit`, `riwayat_unit`, `log_unit`, `role_unit`
* **Patterns:**
    * "Apakah Unit bisa melihat histori aktivitas?"
    * "Histori aktivitas apa yang bisa dilihat Unit?"
    * "Apakah Unit punya akses riwayat aktivitas?"
    * "Apakah Unit bisa melihat log aktivitas akunnya?"
    * "Apakah Unit bisa melihat histori aktivitas semua role?"
    * "Apakah Unit bisa melihat riwayat perubahan arsip?"
* **Responses:** Unit dapat melihat Histori Aktivitas yang berkaitan dengan arsip milik unitnya sendiri. Unit tidak dapat melihat histori aktivitas arsip milik Unit lain, PPK, atau Super Admin.

## 26 Intent: unit_activity_history_export
* **Tags:** `export_histori_unit`, `histori_xlsx_unit`, `download_histori_unit`, `role_unit`
* **Patterns:**
    * "Apakah Unit bisa export histori aktivitas?"
    * "Apakah Unit bisa download histori aktivitas XLSX?"
    * "Apakah Unit bisa mengunduh riwayat aktivitas?"
    * "Data histori apa yang bisa diexport Unit?"
* **Responses:** Unit dapat mengekspor Histori Aktivitas dalam format XLSX untuk arsip milik unitnya sendiri. Unit tidak dapat mengekspor histori aktivitas arsip milik Unit lain, PPK, atau Super Admin.