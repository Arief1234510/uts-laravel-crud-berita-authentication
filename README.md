

# UTS Laravel - CRUD Berita + Authentication

## Deskripsi
Project ini merupakan tugas UTS mata kuliah Framework yang dibuat menggunakan Laravel. Aplikasi ini memiliki fitur autentikasi login serta manajemen berita khusus untuk admin menggunakan template Black Dashboard.

## Fitur Utama
* **Login & Register**: Menggunakan Laravel Breeze.
* **Middleware Admin**: Proteksi route menggunakan role `admin`.
* **CRUD Berita**: Manajemen berita (Tambah, Edit, Hapus).
* **Upload Gambar**: Fitur unggah gambar berita ke storage.
* **Dashboard Admin**: Menggunakan Black Dashboard Template.

## Cara Menjalankan Project

1. **Clone Repository**
   ```bash
   git clone https://github.com/Arief1234510/uts-laravel-crud-berita-authentication.git
   cd uts-laravel-crud-berita-authentication
   ```
2. **Install Dependencies**
   ```bash
   composer install
   npm install && npm run build
   ```
3. **Konfigurasi Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. **Migrasi & Seeder**
   ```bash
   php artisan migrate --seed
   ```
5. **Link Storage**
   ```bash
   php artisan storage:link
   ```
6. **Jalankan Server**
   ```bash
   php artisan serve
   ```

### Login Admin:
```
Gunakan akun berikut untuk mengakses dashboard admin setelah berhasil menjalankan seeder:
Email: admin@gmail.com
Password: admin12345
```
