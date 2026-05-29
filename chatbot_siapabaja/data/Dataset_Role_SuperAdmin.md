---
role: Super Admin
role_access: super_admin
deskripsi: Pengguna internal dengan otoritas tertinggi untuk mengelola akun, master data, arsip, dan rekapitulasi data tanpa batasan kepemilikan arsip.
total_intent: 30
---

## 1. Intent: rbac_super_admin_access
* **Tags:** `role_super_admin`, `hak_akses_super_admin`, `otoritas_penuh`, `kontrol_sistem`
* **Patterns:**
    * "Apa hak akses role Super Admin?"
    * "Apa saja yang bisa dilakukan Super Admin?"
    * "Apakah Super Admin memiliki akses penuh?"
    * "Siapa role tertinggi di sistem?"
* **Responses:** Super Admin adalah role dengan otoritas tertinggi. Super Admin dapat mengelola akun Unit dan PPK, master data, seluruh arsip, dokumen, status akses arsip, dashboard, dan ekspor data tanpa batasan kepemilikan arsip.

## 2. Intent: super_admin_access_scope
* **Tags:** `cakupan_akses`, `akses_lintas_role`, `seluruh_data`, `role_super_admin`
* **Patterns:**
    * "Data apa saja yang bisa diakses Super Admin?"
    * "Apakah Super Admin bisa melihat semua data?"
    * "Apakah akses Super Admin dibatasi unit tertentu?"
    * "Apakah Super Admin dibatasi kepemilikan arsip?"
* **Responses:** Super Admin dapat mengakses data seluruh Unit dan PPK. Akses Super Admin tidak dibatasi oleh pemilik arsip, unit kerja, atau akun pengunggah.

## 3. Intent: super_admin_user_public_scope
* **Tags:** `user_publik`, `akses_guest`, `akun_publik`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin mengelola akun User publik?"
    * "Apakah User publik dibuatkan akun oleh Super Admin?"
    * "Apa batasan User publik dari sisi Super Admin?"
    * "Kenapa pengunjung publik tidak punya akun login?"
* **Responses:** Super Admin tidak perlu membuat akun untuk User publik. User publik hanya mengakses halaman luar dan arsip berstatus Publik tanpa login.

## 4. Intent: super_admin_manage_unit_scope
* **Tags:** `kelola_unit`, `akun_unit`, `arsip_unit`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa mengelola akun Unit?"
    * "Apa kewenangan Super Admin terhadap Unit?"
    * "Apakah Super Admin bisa melihat arsip Unit?"
    * "Apakah Super Admin bisa CRUD arsip Unit?"
* **Responses:** Super Admin dapat mengelola akun Unit dan seluruh arsip milik Unit. Kewenangannya mencakup melihat, menambah, mengedit, menghapus, mengubah status, dan mengelola dokumen arsip Unit.

## 5. Intent: super_admin_manage_ppk_scope
* **Tags:** `kelola_ppk`, `akun_ppk`, `arsip_ppk`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa mengelola akun PPK?"
    * "Apa kewenangan Super Admin terhadap PPK?"
    * "Apakah Super Admin bisa melihat arsip PPK?"
    * "Apakah Super Admin bisa CRUD arsip PPK?"
* **Responses:** Super Admin dapat mengelola akun PPK dan seluruh arsip milik PPK. Batasan PPK terhadap arsip PPK lain tidak berlaku untuk Super Admin.

## 6. Intent: super_admin_archive_visibility
* **Tags:** `visibilitas_arsip`, `arsip_publik`, `arsip_privat`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa melihat arsip privat?"
    * "Apakah Super Admin bisa melihat arsip privat Unit?"
    * "Apakah Super Admin bisa melihat arsip privat PPK?"
    * "Siapa yang bisa melihat semua arsip?"
* **Responses:** Super Admin dapat melihat seluruh arsip Publik dan Privat, baik milik Unit maupun PPK. Pembatasan arsip privat untuk role lain tidak membatasi akses Super Admin.

## 7. Intent: super_admin_archive_crud_scope
* **Tags:** `crud_arsip`, `kelola_arsip`, `arsip_lintas_unit`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa mengelola semua arsip?"
    * "Apakah Super Admin bisa mengelola seluruh arsip?"
    * "Apakah Super Admin bisa CRUD semua arsip?"
    * "Apakah Super Admin bisa mengelola arsip Unit dan PPK?"
    * "Siapa yang bisa mengelola semua arsip?"
* **Responses:** Super Admin dapat melakukan CRUD terhadap seluruh arsip di sistem. Aksi tersebut berlaku untuk arsip milik Unit maupun PPK tanpa batasan kepemilikan.

## 8. Intent: super_admin_add_archive_permission
* **Tags:** `tambah_arsip`, `input_arsip`, `arsip_baru`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa menambah arsip?"
    * "Apakah Super Admin bisa input pengadaan baru?"
    * "Apakah Super Admin bisa membuat arsip untuk unit?"
    * "Apakah Super Admin bisa menambah arsip PPK?"
* **Responses:** Super Admin dapat menambah arsip pengadaan sesuai form yang tersedia. Arsip yang dibuat dapat dikelola kembali oleh Super Admin tanpa batasan kepemilikan.

## 9. Intent: super_admin_edit_archive_permission
* **Tags:** `edit_arsip`, `ubah_metadata`, `koreksi_arsip`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa mengedit arsip?"
    * "Apakah Super Admin bisa mengubah metadata arsip?"
    * "Apakah Super Admin bisa memperbaiki data pengadaan?"
    * "Apakah Super Admin bisa mengubah arsip Unit atau PPK?"
* **Responses:** Super Admin dapat mengedit metadata dan dokumen pendukung pada arsip milik Unit maupun PPK. Kewenangan edit tidak dibatasi oleh pemilik arsip.

## 10. Intent: super_admin_delete_archive_permission
* **Tags:** `hapus_arsip`, `hapus_permanen`, `delete_arsip`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa menghapus arsip?"
    * "Siapa yang bisa menghapus arsip Unit dan PPK?"
    * "Apakah Super Admin bisa menghapus arsip permanen?"
    * "Apa yang terjadi jika Super Admin menghapus arsip?"
* **Responses:** Super Admin dapat menghapus arsip Unit maupun PPK. Penghapusan bersifat permanen dan dapat menghapus data arsip beserta dokumen pendukung dari penyimpanan sistem.

## 11. Intent: super_admin_upload_document_permission
* **Tags:** `upload_dokumen`, `dokumen_pendukung`, `lampiran_arsip`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa upload dokumen?"
    * "Apakah Super Admin bisa menambahkan dokumen pendukung?"
    * "Apakah Super Admin bisa mengunggah file untuk arsip Unit?"
    * "Apakah Super Admin bisa upload file arsip PPK?"
* **Responses:** Super Admin dapat mengunggah dokumen pendukung untuk arsip yang dikelolanya. Format yang didukung mengikuti aturan sistem, seperti PDF, DOC, DOCX, XLS, XLSX, JPG, JPEG, dan PNG.

## 12. Intent: super_admin_delete_document_permission
* **Tags:** `hapus_dokumen`, `hapus_file`, `lampiran_arsip`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa menghapus file dokumen?"
    * "Apakah Super Admin bisa hapus lampiran arsip?"
    * "Bisakah file dokumen dihapus tanpa menghapus arsip?"
    * "Apakah Super Admin bisa mengganti dokumen pendukung?"
* **Responses:** Super Admin dapat menghapus atau mengganti dokumen pendukung pada arsip sesuai fitur yang tersedia. Penghapusan file bersifat permanen, sehingga dokumen yang dipilih harus dipastikan benar.

## 13. Intent: super_admin_document_preview_download
* **Tags:** `preview_dokumen`, `unduh_dokumen`, `akses_file`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa membuka dokumen semua arsip?"
    * "Apakah Super Admin bisa download dokumen arsip?"
    * "Apakah Super Admin bisa preview dokumen Unit dan PPK?"
    * "Kenapa file tidak ditemukan saat dibuka Super Admin?"
* **Responses:** Super Admin dapat membuka, melihat pratinjau, dan mengunduh dokumen arsip Unit maupun PPK. Jika file tidak ditemukan, kemungkinan dokumen belum diunggah atau sudah terhapus dari penyimpanan.

## 14. Intent: super_admin_change_archive_status
* **Tags:** `ubah_status_arsip`, `publik_privat`, `akses_dokumen`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa mengubah status arsip?"
    * "Apakah Super Admin bisa mengubah arsip publik menjadi privat?"
    * "Apakah Super Admin bisa mengubah arsip privat menjadi publik?"
    * "Siapa yang bisa mengatur status akses arsip?"
* **Responses:** Super Admin dapat mengubah status akses arsip menjadi Publik atau Privat. Perubahan status berlaku pada arsip yang dipilih dan memengaruhi visibilitas dokumen di halaman publik.

## 15. Intent: super_admin_metadata_rules
* **Tags:** `metadata_arsip`, `atribut_pengadaan`, `informasi_arsip`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa mengelola metadata arsip?"
    * "Metadata apa yang bisa dikelola Super Admin?"
    * "Apakah Super Admin bisa mengubah informasi anggaran?"
    * "Apakah Super Admin bisa mengubah data rekanan?"
* **Responses:** Super Admin dapat mengelola metadata arsip seperti tahun, unit kerja, nama pekerjaan, jenis pengadaan, metode pengadaan, status pekerjaan, status akses, pagu, HPS, nilai kontrak, dan nama rekanan.

## 16. Intent: super_admin_dashboard_scope
* **Tags:** `dashboard_super_admin`, `statistik_sistem`, `monitoring_data`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin punya dashboard sendiri?"
    * "Data apa yang tampil di dashboard Super Admin?"
    * "Apakah Super Admin bisa melihat statistik seluruh unit?"
    * "Apakah dashboard Super Admin menampilkan data semua arsip?"
* **Responses:** Super Admin memiliki dashboard untuk melihat ringkasan statistik sistem secara menyeluruh. Data dashboard Super Admin mencakup arsip dan rekapitulasi dari seluruh Unit dan PPK sesuai cakupan aksesnya.

## 17. Intent: super_admin_dashboard_filter_scope
* **Tags:** `filter_dashboard`, `statistik_super_admin`, `grafik_dashboard`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa memfilter dashboard?"
    * "Apakah Super Admin bisa filter statistik berdasarkan tahun?"
    * "Apakah Super Admin bisa filter statistik berdasarkan unit?"
    * "Kenapa grafik dashboard Super Admin berubah?"
* **Responses:** Super Admin dapat memakai filter dashboard yang tersedia, seperti Tahun dan Unit Kerja. Hasil statistik dan grafik akan menyesuaikan filter tanpa membatasi kewenangan penuh Super Admin.

## 18. Intent: super_admin_export_scope
* **Tags:** `export_excel`, `rekap_data`, `laporan_pengadaan`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa export Excel?"
    * "Data apa yang bisa diekspor Super Admin?"
    * "Apakah Super Admin bisa export data semua unit?"
    * "Siapa yang bisa export rekap total?"
* **Responses:** Super Admin dapat melakukan Ekspor Excel untuk rekapitulasi data sesuai cakupan sistem. Berbeda dari Unit yang terbatas pada datanya sendiri, Super Admin dapat mengekspor data lintas Unit dan PPK.

## 19. Intent: super_admin_account_management
* **Tags:** `kelola_akun`, `manajemen_user`, `akun_internal`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa mengelola akun pengguna?"
    * "Siapa yang bisa membuat akun Unit dan PPK?"
    * "Apakah Super Admin bisa menghapus akun pengguna?"
    * "Apakah Super Admin bisa mengubah data akun internal?"
* **Responses:** Super Admin dapat membuat, mengedit, menonaktifkan, mengaktifkan, mereset password, dan menghapus akun Unit maupun PPK. User publik tidak memerlukan akun internal.

## 20. Intent: super_admin_manage_unit_accounts
* **Tags:** `akun_unit`, `kelola_pic_unit`, `manajemen_unit`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa membuat akun Unit?"
    * "Apakah Super Admin bisa edit akun Unit?"
    * "Apakah Super Admin bisa hapus akun Unit?"
    * "Apakah Super Admin bisa menonaktifkan akun Unit?"
* **Responses:** Super Admin dapat mengelola akun Unit, termasuk membuat, mengedit, menghapus, mengaktifkan, dan menonaktifkan akun Unit. Akun Unit digunakan oleh pengguna internal Unit untuk mengelola arsip sesuai kewenangannya.

## 21. Intent: super_admin_manage_ppk_accounts
* **Tags:** `akun_ppk`, `kelola_ppk`, `manajemen_ppk`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa membuat akun PPK?"
    * "Apakah Super Admin bisa edit akun PPK?"
    * "Apakah Super Admin bisa hapus akun PPK?"
    * "Apakah Super Admin bisa menonaktifkan akun PPK?"
* **Responses:** Super Admin dapat mengelola akun PPK, termasuk membuat, mengedit, menghapus, mengaktifkan, dan menonaktifkan akun PPK. Akun PPK digunakan untuk pengawasan dan pengelolaan arsip sesuai kewenangan PPK.

## 22. Intent: super_admin_reset_password_scope
* **Tags:** `reset_password`, `lupa_password`, `akun_unit`, `akun_ppk`, `role_super_admin`
* **Patterns:**
    * "Siapa yang bisa reset password Unit?"
    * "Siapa yang bisa reset password PPK?"
    * "Apakah Super Admin bisa membantu lupa password?"
    * "Apakah Unit dan PPK bisa reset password sendiri saat lupa?"
* **Responses:** Reset password akun Unit dan PPK yang lupa password menjadi wewenang Super Admin. Unit dan PPK hanya dapat mengganti password sendiri jika masih bisa login dan mengetahui password saat ini.

## 23. Intent: super_admin_account_status_control
* **Tags:** `status_akun`, `akun_aktif`, `akun_nonaktif`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa menonaktifkan akun?"
    * "Kenapa akun inactive tidak bisa login?"
    * "Siapa yang bisa mengaktifkan kembali akun Unit atau PPK?"
    * "Apakah status akun diatur Super Admin?"
* **Responses:** Super Admin dapat mengatur status aktif atau nonaktif pada akun Unit dan PPK. Akun berstatus nonaktif tidak dapat digunakan untuk login ke halaman internal.

## 24. Intent: super_admin_self_account_management
* **Tags:** `akun_pribadi_super_admin`, `edit_profil`, `ganti_password`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa mengubah akun sendiri?"
    * "Apakah Super Admin bisa ganti password sendiri?"
    * "Apakah Super Admin bisa edit profil sendiri?"
    * "Apa batasan akun pribadi Super Admin?"
* **Responses:** Super Admin dapat mengelola akun pribadinya sendiri, seperti memperbarui nama, email, dan password sesuai fitur yang tersedia. Pengelolaan akun pribadi tidak mengurangi kewenangan Super Admin terhadap sistem.

## 25. Intent: super_admin_master_data_management
* **Tags:** `master_data`, `kelola_menu`, `dropdown_sistem`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa mengelola master data?"
    * "Apa saja master data yang dikelola Super Admin?"
    * "Siapa yang bisa mengelola Tahun dan Unit Kerja?"
    * "Siapa yang bisa mengelola Jenis Pengadaan dan Status Pekerjaan?"
* **Responses:** Super Admin dapat mengelola master data melalui Kelola Menu. Master data yang dikelola mencakup Tahun, Unit Kerja, Status Pekerjaan, dan Jenis Pengadaan.

## 26. Intent: super_admin_master_data_crud
* **Tags:** `crud_master_data`, `tambah_master_data`, `edit_master_data`, `hapus_master_data`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa tambah master data?"
    * "Apakah Super Admin bisa edit master data?"
    * "Apakah Super Admin bisa hapus master data?"
    * "Apakah Super Admin bisa mengaktifkan atau menonaktifkan master data?"
* **Responses:** Super Admin dapat menambah, mengedit, menghapus, mengaktifkan, dan menonaktifkan master data sesuai kebutuhan sistem. Master data aktif digunakan pada pilihan isian form dan tampilan terkait.

## 27. Intent: super_admin_navigation_access
* **Tags:** `menu_super_admin`, `sidebar_super_admin`, `akses_menu`, `role_super_admin`
* **Patterns:**
    * "Menu apa saja yang tersedia untuk Super Admin?"
    * "Apa isi sidebar Super Admin?"
    * "Kenapa Super Admin bisa melihat Kelola Menu?"
    * "Kenapa Super Admin bisa melihat Kelola Akun?"
* **Responses:** Super Admin memiliki akses menu internal seperti Dashboard, Arsip PBJ, Tambah Pengadaan, Kelola Menu, Kelola Akun, Kembali, dan Keluar. Menu Kelola Menu dan Kelola Akun tersedia karena Super Admin mengelola master data serta akun internal.

## 28. Intent: super_admin_archive_search_filter_access
* **Tags:** `cari_arsip`, `filter_arsip`, `arsip_pbj`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa mencari arsip?"
    * "Apakah Super Admin bisa filter arsip?"
    * "Apakah Super Admin bisa melihat arsip berdasarkan unit?"
    * "Apakah Super Admin bisa melihat arsip berdasarkan tahun atau status?"
* **Responses:** Super Admin dapat mencari dan memfilter arsip sesuai fitur yang tersedia, seperti berdasarkan kata kunci, unit, tahun, status pekerjaan, atau status akses. Hasil pencarian tetap berada dalam cakupan akses penuh Super Admin.

## 29. Intent: super_admin_bulk_delete_status
* **Tags:** `bulk_delete`, `hapus_massal`, `hapus_banyak_arsip`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa bulk delete?"
    * "Apakah Super Admin bisa menghapus banyak arsip sekaligus?"
    * "Kenapa tombol Hapus Terpilih tidak ada di Super Admin?"
    * "Apakah hapus massal tersedia untuk Super Admin?"
* **Responses:** Saat ini role Super Admin tidak memiliki fitur hapus massal atau bulk delete. Super Admin hanya bisa menghapus arsip satu per satu melalui aksi hapus pada data arsip.

## 30. Intent: super_admin_activity_log_status
* **Tags:** `histori_aktivitas`, `log_aktivitas`, `audit_trail`, `role_super_admin`
* **Patterns:**
    * "Apakah Super Admin bisa melihat histori aktivitas?"
    * "Apakah Super Admin bisa melihat log aktivitas semua role?"
    * "Apakah ada audit trail di sistem?"
    * "Kenapa menu histori tidak ada di Super Admin?"
* **Responses:** Saat ini sistem tidak menyediakan menu Histori Aktivitas, Log Aktivitas, atau Audit Trail untuk Super Admin.
