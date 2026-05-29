---
dataset: Dataset_Role_PPK_Baru
role: PPK
role_access: ppk
fokus: Siapa boleh melakukan apa sesuai role PPK
deskripsi: Dataset ini menjelaskan kewenangan, cakupan akses, dan batasan role PPK tanpa memuat langkah penggunaan fitur secara rinci.
total_intent: 23
---

## 1. Intent: rbac_ppk_access_overview
* **Tags:** `role_ppk`, `hak_akses_ppk`, `cakupan_ppk`, `rbac_ppk`
* **Patterns:**
    * "Apa hak akses role PPK?"
    * "Apa saja yang bisa dilakukan PPK?"
    * "PPK boleh melakukan apa di SIAPABAJA?"
    * "Apa kewenangan utama PPK?"
* **Responses:** Role PPK adalah pengguna internal yang berwenang mengawasi dan mengelola arsip pengadaan dalam cakupan Unit Kerja. PPK dapat melihat, menambah, mengedit, menghapus, mengunggah dokumen, mengubah status akses, dan mengekspor data sesuai batas kewenangannya. Cakupan PPK meliputi seluruh arsip Unit Kerja dan arsip PPK miliknya sendiri, bukan arsip milik PPK lain.

## 2. Intent: ppk_role_supervision
* **Tags:** `fungsi_ppk`, `pengawasan_ppk`, `monitoring_unit`, `validasi_arsip`
* **Patterns:**
    * "Apa fungsi role PPK dalam sistem?"
    * "Apa peran PPK di SIAPABAJA?"
    * "Mengapa PPK bisa mengakses arsip Unit?"
    * "Untuk apa role PPK dibuat?"
* **Responses:** PPK berfungsi sebagai pengawas arsip pengadaan Unit Kerja. Karena berperan dalam monitoring, PPK diberi akses untuk memeriksa dan mengelola arsip Unit Kerja agar data pengadaan tetap lengkap, benar, dan terdokumentasi.

## 3. Intent: ppk_internal_login_access
* **Tags:** `akses_login_ppk`, `akun_internal`, `dashboard_ppk`, `role_ppk`
* **Patterns:**
    * "Apakah PPK bisa login ke sistem?"
    * "Apakah PPK punya akun internal?"
    * "Apakah PPK bisa masuk dashboard?"
    * "Apakah PPK berbeda dari User publik?"
* **Responses:** PPK termasuk pengguna internal yang memiliki akun login dan akses dashboard. Berbeda dari User publik, PPK dapat masuk ke halaman internal untuk mengelola arsip sesuai cakupan kewenangannya.

## 4. Intent: ppk_archive_access_scope
* **Tags:** `cakupan_arsip_ppk`, `arsip_unit`, `arsip_ppk`, `akses_data_ppk`
* **Patterns:**
    * "Arsip siapa saja yang bisa diakses PPK?"
    * "Apakah PPK bisa melihat arsip Unit?"
    * "Apakah PPK bisa melihat arsip PPK sendiri?"
    * "Cakupan data PPK sampai mana?"
* **Responses:** PPK dapat mengakses seluruh arsip milik Unit Kerja dan arsip PPK miliknya sendiri. Arsip milik PPK lain tidak termasuk dalam cakupan akses internal PPK.

## 5. Intent: ppk_unit_archive_crud
* **Tags:** `crud_unit`, `arsip_unit`, `pengawasan_unit`, `role_ppk`
* **Patterns:**
    * "Apakah PPK bisa CRUD arsip Unit?"
    * "Apakah PPK bisa mengelola arsip Unit?"
    * "Apakah PPK bisa mengedit arsip Unit?"
    * "Apakah PPK bisa menghapus arsip Unit?"
    * "Apakah PPK bisa mengelola arsip milik Unit Kerja?"
    * "Apakah PPK berwenang mengelola arsip Unit?"
* **Responses:** PPK dapat melakukan CRUD terhadap arsip milik Unit Kerja. Kewenangan ini mencakup melihat, menambah, mengedit, menghapus, mengunggah dokumen, dan mengubah status akses arsip Unit Kerja.

## 6. Intent: ppk_own_archive_crud
* **Tags:** `arsip_ppk_sendiri`, `crud_ppk_sendiri`, `kepemilikan_ppk`, `role_ppk`
* **Patterns:**
    * "Apakah PPK bisa mengelola arsip miliknya sendiri?"
    * "Apakah PPK bisa CRUD arsip PPK sendiri?"
    * "Apakah PPK bisa mengedit arsip yang dibuat sendiri?"
    * "Apakah PPK bisa hapus arsip PPK miliknya sendiri?"
* **Responses:** PPK dapat mengelola arsip internal PPK miliknya sendiri. Aksi yang tersedia meliputi melihat, menambah, mengedit, menghapus, mengunggah dokumen, dan mengubah status akses arsip miliknya sendiri.

## 7. Intent: ppk_other_ppk_restriction
* **Tags:** `arsip_ppk_lain`, `batasan_ppk`, `akses_ditolak_ppk`, `kepemilikan_arsip`
* **Patterns:**
    * "Apakah PPK bisa CRUD arsip PPK lain?"
    * "Apakah PPK bisa melihat arsip PPK lain?"
    * "Apakah PPK bisa mengedit arsip milik PPK lain?"
    * "Kenapa PPK tidak bisa akses arsip PPK lain?"
* **Responses:** PPK tidak berwenang melihat, mengedit, menghapus, atau mengubah arsip milik PPK lain melalui akses internal PPK. Arsip PPK lain berada di luar cakupan kepemilikan akun PPK tersebut.

## 8. Intent: ppk_visibility_public_private
* **Tags:** `arsip_publik`, `arsip_privat`, `visibilitas_ppk`, `hak_lihat_ppk`
* **Patterns:**
    * "Apakah PPK bisa melihat arsip privat Unit?"
    * "Apakah PPK bisa melihat arsip publik dan privat?"
    * "Siapa yang bisa melihat arsip privat Unit?"
    * "Apakah PPK bisa melihat arsip privat PPK lain?"
* **Responses:** PPK dapat melihat arsip Publik dan Privat milik Unit Kerja. Untuk arsip internal PPK, PPK hanya dapat melihat arsip miliknya sendiri. Arsip Privat milik PPK lain tidak dapat diakses oleh PPK.

## 9. Intent: ppk_dashboard_scope
* **Tags:** `dashboard_ppk`, `statistik_ppk`, `monitoring_data`, `cakupan_dashboard`
* **Patterns:**
    * "Apakah PPK punya dashboard sendiri?"
    * "Data apa yang tampil di dashboard PPK?"
    * "Apakah dashboard PPK menampilkan semua unit?"
    * "Apakah statistik PPK berbeda dari Unit?"
* **Responses:** PPK memiliki dashboard untuk memantau data dalam cakupan pengawasannya. Statistik PPK mencakup arsip Unit Kerja dan arsip PPK miliknya sendiri jika tersedia, bukan arsip milik PPK lain.

## 10. Intent: ppk_menu_access
* **Tags:** `menu_ppk`, `sidebar_ppk`, `navigasi_ppk`, `akses_menu_ppk`
* **Patterns:**
    * "Menu apa saja untuk PPK?"
    * "Apa saja isi sidebar PPK?"
    * "Halaman apa saja yang bisa diakses PPK?"
    * "Apakah PPK punya menu Tambah Pengadaan?"
* **Responses:** PPK dapat mengakses menu internal seperti Dashboard, Arsip PBJ, Tambah Pengadaan, Kelola Akun pribadi, Kembali, dan Keluar. Menu administratif seperti Kelola Menu, Kelola Akun Unit, dan Kelola Akun PPK tidak tersedia untuk PPK.

## 11. Intent: ppk_add_archive_permission
* **Tags:** `tambah_arsip_ppk`, `input_pengadaan_ppk`, `arsip_baru_ppk`, `role_ppk`
* **Patterns:**
    * "Apakah PPK bisa tambah arsip?"
    * "Apakah PPK bisa input pengadaan baru?"
    * "Arsip apa yang bisa ditambahkan PPK?"
    * "Apakah PPK bisa menambahkan arsip Unit?"
* **Responses:** PPK dapat menambahkan arsip pengadaan sesuai cakupan aksesnya, yaitu arsip Unit Kerja dan arsip PPK miliknya sendiri. PPK tidak dapat menambahkan atau mengelola arsip atas nama PPK lain.

## 12. Intent: ppk_upload_document_permission
* **Tags:** `upload_dokumen_ppk`, `dokumen_pendukung`, `lampiran_arsip`, `role_ppk`
* **Patterns:**
    * "Apakah PPK bisa upload dokumen?"
    * "Dokumen apa yang bisa diunggah PPK?"
    * "Apakah PPK bisa mengunggah lampiran arsip Unit?"
    * "Apakah PPK bisa upload dokumen untuk arsip PPK lain?"
* **Responses:** PPK dapat mengunggah dokumen pendukung untuk arsip Unit Kerja dan arsip PPK miliknya sendiri. PPK tidak dapat mengunggah dokumen pada arsip milik PPK lain.

## 13. Intent: ppk_edit_archive_permission
* **Tags:** `edit_arsip_ppk`, `ubah_data_ppk`, `update_arsip`, `role_ppk`
* **Patterns:**
    * "Apakah PPK bisa edit arsip?"
    * "Arsip apa saja yang bisa diedit PPK?"
    * "Bisakah PPK mengubah data pengadaan Unit?"
    * "Kenapa PPK tidak bisa edit arsip tertentu?"
* **Responses:** PPK dapat mengedit arsip milik Unit Kerja dan arsip PPK miliknya sendiri. Jika arsip berada di luar cakupan tersebut, seperti arsip milik PPK lain, sistem akan membatasi akses edit.

## 14. Intent: ppk_change_archive_status_permission
* **Tags:** `ubah_status_ppk`, `publik_privat`, `status_akses`, `role_ppk`
* **Patterns:**
    * "Apakah PPK bisa mengubah status arsip?"
    * "Apakah PPK bisa mengubah arsip publik menjadi privat?"
    * "Status arsip apa yang bisa diubah PPK?"
    * "Apakah PPK bisa mengubah status arsip PPK lain?"
* **Responses:** PPK dapat mengubah status akses Publik atau Privat pada arsip Unit Kerja dan arsip PPK miliknya sendiri. PPK tidak dapat mengubah status akses arsip milik PPK lain.

## 15. Intent: ppk_delete_archive_permission
* **Tags:** `hapus_arsip_ppk`, `delete_arsip`, `hapus_permanen`, `role_ppk`
* **Patterns:**
    * "Apakah PPK bisa hapus arsip?"
    * "Arsip apa yang bisa dihapus PPK?"
    * "Apakah PPK bisa menghapus arsip Unit?"
    * "Apakah PPK bisa hapus arsip PPK lain?"
* **Responses:** PPK dapat menghapus arsip Unit Kerja dan arsip PPK miliknya sendiri. PPK tidak dapat menghapus arsip milik PPK lain. Penghapusan arsip bersifat permanen setelah dikonfirmasi oleh pengguna yang berwenang.

## 16. Intent: ppk_document_access_permission
* **Tags:** `preview_dokumen_ppk`, `download_dokumen_ppk`, `akses_file`, `role_ppk`
* **Patterns:**
    * "Apakah PPK bisa membuka dokumen arsip?"
    * "Apakah PPK bisa download dokumen lintas unit?"
    * "Dokumen apa saja yang bisa dilihat PPK?"
    * "Kenapa PPK tidak bisa membuka dokumen tertentu?"
* **Responses:** PPK dapat membuka, mempreview, atau mengunduh dokumen pada arsip Unit Kerja dan arsip PPK miliknya sendiri. Dokumen pada arsip milik PPK lain tidak termasuk dalam cakupan akses PPK.

## 17. Intent: ppk_delete_document_permission
* **Tags:** `hapus_file_ppk`, `hapus_lampiran`, `dokumen_pendukung`, `role_ppk`
* **Patterns:**
    * "Apakah PPK bisa hapus file lampiran?"
    * "Bisakah PPK hapus dokumen tanpa hapus arsip?"
    * "File dokumen apa yang bisa dihapus PPK?"
    * "Kenapa PPK tidak bisa hapus dokumen tertentu?"
* **Responses:** PPK dapat menghapus file lampiran pada arsip Unit Kerja dan arsip PPK miliknya sendiri. Penghapusan lampiran tidak berarti menghapus data arsip utama, tetapi file yang dihapus tetap bersifat permanen.

## 18. Intent: ppk_export_excel_permission
* **Tags:** `export_excel_ppk`, `rekap_lintas_unit`, `laporan_ppk`, `role_ppk`
* **Patterns:**
    * "Apakah PPK bisa export Excel?"
    * "Data apa yang bisa diekspor PPK?"
    * "Apakah PPK bisa unduh rekap lintas unit?"
    * "Apakah PPK bisa export data PPK lain?"
* **Responses:** PPK dapat melakukan Ekspor Excel untuk rekapitulasi arsip Unit Kerja dan arsip PPK miliknya sendiri. PPK tidak dapat mengekspor arsip milik PPK lain yang berada di luar kewenangannya.

## 19. Intent: ppk_personal_account_permission
* **Tags:** `akun_pribadi_ppk`, `edit_profil_ppk`, `ganti_password`, `role_ppk`
* **Patterns:**
    * "Apakah PPK bisa mengubah akun sendiri?"
    * "Apakah PPK bisa ganti password sendiri?"
    * "Apakah PPK bisa mengubah email akunnya?"
    * "Apa saja yang bisa dikelola PPK pada akun pribadi?"
* **Responses:** PPK dapat mengelola akun pribadinya sendiri, seperti mengubah nama, email, dan password selama masih mengetahui password saat ini. Jika lupa password atau tidak dapat login, reset password harus dibantu oleh Super Admin.

## 20. Intent: ppk_account_management_restriction
* **Tags:** `kelola_akun_dilarang`, `akun_unit`, `akun_ppk`, `role_ppk`
* **Patterns:**
    * "Apakah PPK bisa membuat akun Unit?"
    * "Apakah PPK bisa membuat akun PPK baru?"
    * "Apakah PPK bisa menghapus akun pengguna lain?"
    * "Apakah PPK bisa reset password akun lain?"
* **Responses:** PPK tidak dapat membuat, mengedit, menghapus, mengubah status, atau mereset password akun Unit maupun akun PPK lain. Pengelolaan akun pengguna lain hanya menjadi kewenangan Super Admin.

## 21. Intent: ppk_master_data_restriction
* **Tags:** `kelola_menu_dilarang`, `master_data`, `dropdown_sistem`, `role_ppk`
* **Patterns:**
    * "Apakah PPK bisa Kelola Menu?"
    * "Apakah PPK bisa mengubah master data?"
    * "Apakah PPK bisa tambah tahun atau unit kerja?"
    * "Kenapa PPK tidak bisa akses Kelola Menu?"
* **Responses:** PPK tidak memiliki akses ke menu Kelola Menu atau pengaturan master data. Pengelolaan data dropdown seperti Tahun, Unit Kerja, Status Pekerjaan, dan Jenis Pengadaan hanya tersedia untuk Super Admin.

## 22. Intent: ppk_history_bulk_delete_restriction
* **Tags:** `histori_tidak_tersedia`, `bulk_delete_tidak_tersedia`, `batasan_fitur_ppk`, `role_ppk`
* **Patterns:**
    * "Apakah PPK bisa melihat histori aktivitas?"
    * "Apakah PPK punya menu log aktivitas?"
    * "Apakah PPK bisa bulk delete?"
    * "Kenapa tidak ada hapus massal di PPK?"
* **Responses:** Saat ini PPK tidak memiliki menu Histori Aktivitas atau Log Aktivitas. Selain itu tidak memiliki fitur bulk delete atau hapus massal.

## 23. Intent: ppk_access_denied_reason
* **Tags:** `akses_ditolak_ppk`, `error_403`, `batasan_role`, `role_ppk`
* **Patterns:**
    * "Kenapa PPK mendapat akses ditolak?"
    * "Apa maksud Error 403 untuk PPK?"
    * "Kenapa PPK tidak bisa edit atau hapus arsip?"
    * "Kenapa tombol aksi tidak muncul untuk PPK?"
* **Responses:** Akses ditolak muncul ketika PPK mencoba membuka halaman atau melakukan aksi di luar kewenangannya. Contohnya adalah mengakses arsip milik PPK lain, membuka fitur Super Admin, mengelola akun pengguna lain, atau mengubah master data.
