## 13 April - Migration
fitur laravel untuk mengelola database, mulai dari pembuatan tabel, update,
dan relasi

laravel sudah menyiapkan tabel untuk kebutuhan otentikasi standar yaitu
login, register dan lupa password

untuk bisa menggunakan migaasi
1. konfigurasi file `.env` di laravel untuk koneksi database

perintah migration
1. perintah cek status migration
    `php artisan migrate:status`
2. eksekusi migration
    `php artisan migrate`
3. membuat tabel baru mengguakan migration
    perintahnya : `php artisan make:migration create_namatabel_table`
    contoh membuat tabel mahasiswa
        `php artisan make:migration create_mahasiswa_table`
4. membatalkan / mengedit migration (digunakan hanya saat pengembangan)
    `php artisan migrate:rollback --step=x`

Latihan
- buat tabel matakuliah
    - matakuliah_id
    - kode_mk
    - nama_mk
    - sks

