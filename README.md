# Tugas Web P9 - Laravel Setup

## Identitas

- Nama: Diva nadia gea
- NIM: 4253250044
- Kelas: PSIK 25A
- Mata Kuliah: Pemrograman Web (Pertemuan 9)

## Deskripsi

Project Laravel 12 untuk Tugas Rutin 9. Berisi tiga halaman (beranda, tentang, kontak) yang ditampilkan dengan Blade view, satu halaman memakai data dinamis dari route, serta koneksi ke database MySQL.

## Kebutuhan

- PHP 8.2 atau lebih baru
- Composer
- XAMPP (Apache dan MySQL)

## Langkah Install

1. Buat project:
   composer create-project laravel/laravel:^12.0 TugasWeb-P9-LaravelSetup
2. Masuk ke folder project:
   cd TugasWeb-P9-LaravelSetup
3. Nyalakan Apache dan MySQL di XAMPP Control Panel
4. Buat database bernama blog_db lewat phpMyAdmin
5. Atur koneksi database di file .env:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=8111
   DB_DATABASE=blog_db
   DB_USERNAME=root
   DB_PASSWORD=
   (DB_PORT disesuaikan dengan port MySQL di XAMPP masing-masing, umumnya 3306)
6. Jalankan migration:
   php artisan migrate
7. Jalankan server:
   php artisan serve
8. Buka http://127.0.0.1:8000

## Daftar Route

- / : halaman utama, menampilkan data dinamis (nama dan daftar mata kuliah) yang dikirim dari route
- /about : halaman tentang
- /contact : halaman kontak

## Penjelasan Struktur Folder

Laravel memakai pola MVC (Model, View, Controller).

- app/Models : Model (M), tempat kelas yang mewakili tabel database. Berisi Post.php
- app/Http/Controllers : Controller (C), tempat logika yang menghubungkan route, model, dan view. Berisi PageController.php
- resources/views : View (V), tampilan Blade (home, about, contact)
- routes/web.php : peta URL ke aksi yang dijalankan
- database/migrations : riwayat struktur tabel database
- public : satu-satunya folder yang boleh diakses langsung oleh browser
- config : file pengaturan aplikasi
- storage : tempat file upload, cache, dan log
- vendor : paket pihak ketiga hasil Composer (tidak diunggah ke GitHub)
- .env : konfigurasi rahasia lokal seperti koneksi database (tidak diunggah ke GitHub)

## Perintah Artisan yang Digunakan

- php artisan make:model Post -m : membuat model Post dan file migration tabel posts
- php artisan make:controller PageController : membuat controller PageController
- php artisan migrate : membuat tabel di database
- php artisan serve : menjalankan server development

