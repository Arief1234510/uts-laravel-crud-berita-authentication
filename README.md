# UTS Laravel - CRUD Berita + Authentication

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Deskripsi
Project ini merupakan tugas UTS mata kuliah Framework yang dibuat menggunakan Laravel. 
Aplikasi ini memiliki fitur autentikasi login serta manajemen berita khusus untuk admin.

---

## Fitur Utama
- Login & Register (Laravel Breeze)
- Middleware Admin (is_admin)
- CRUD Berita (Tambah, Edit, Hapus)
- Upload Gambar Berita
- Dashboard Admin (Black Dashboard Template)

---

## Cara Menjalankan Project

1. Clone repository
```bash
git clone [https://github.com/Arief1234510/uts-laravel-crud-berita-authentication.git](https://github.com/Arief1234510/uts-laravel-crud-berita-authentication.git)
Masuk ke folder project

Bash
cd uts-laravel-crud-berita-authentication
Install dependency

Bash
composer install
Copy file environment

Bash
cp .env.example .env
Generate key

Bash
php artisan key:generate
Jalankan migration + seeder

Bash
php artisan migrate --seed
Link storage (untuk gambar)

Bash
php artisan storage:link
Jalankan server

Bash
php artisan serve
Login Admin
Gunakan akun berikut untuk mengakses dashboard admin:

Email: admin@gmail.com

Password: admin12345