UTS Laravel - CRUD Berita + Authentication
Deskripsi
Project ini merupakan tugas UTS mata kuliah Framework yang dibuat menggunakan Laravel. Aplikasi ini memiliki fitur autentikasi login serta manajemen berita khusus untuk admin menggunakan template Black Dashboard.

Fitur Utama
Login & Register: Menggunakan Laravel Breeze.

Middleware Admin: Proteksi route menggunakan role admin.

CRUD Berita: Manajemen berita (Tambah, Edit, Hapus).

Upload Gambar: Fitur unggah gambar berita ke storage.

Dashboard Admin: Menggunakan Black Dashboard Template.

Cara Menjalankan Project
Clone repository

Bash
git clone https://github.com/Arief1234510/uts-laravel-crud-berita-authentication.git
cd uts-laravel-crud-berita-authentication
Install Dependencies

Bash
composer install
npm install && npm run build
Konfigurasi Environment

Bash
cp .env.example .env
php artisan key:generate
Buka file .env dan pastikan konfigurasi database (DB_DATABASE, DB_USERNAME, dll) sudah sesuai dengan MySQL Anda.

Migrasi & Seeder

Bash
php artisan migrate --seed
Link Storage (PENTING: Agar Gambar Muncul)

Bash
php artisan storage:link
Jalankan Server

Bash
php artisan serve
Login Admin
Gunakan akun berikut untuk mengakses dashboard admin setelah berhasil menjalankan seeder:

Email: admin@gmail.com

Password: admin12345
