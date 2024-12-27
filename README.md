<div align="center">
 <img src="https://opikstudio.my.id/logo_White.png" width="45px"/>
</div>
<div align="center">

# 🎨 OPIK STUDIO 🖌️

</div>

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

## 📥 Panduan Instalasi

### Clone Repository

```bash
# Clone repository
git clone https://github.com/Opikz-Nrdyth/Alisya-Family-Salon.git .

```

### Pengaturan Project

```bash
# Install dependencies (Menggunakan vendor yang sudah ada)
composer install

# Konfigurasi database di file .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_anda
DB_USERNAME=username_anda (biasanya root)
DB_PASSWORD=password_anda (biasanya dikosongin)

# Jalankan migrasi
php artisan migrate

# Jalankan server
php artisan serve
```

## 🚀 Menjalankan Aplikasi

Aplikasi akan tersedia di `http://localhost:8000`

### Migrasi Database

```bash
# Jalankan semua migrasi
php artisan migrate

# Migrasi ulang (Perhatian: Ini akan menghapus semua data)
php artisan migrate:fresh
```

## 💼 Penggunaan Panel Admin

### 1. Login

-   Akses panel admin di `http://localhost:8000/admin`
-   Gunakan kredensial admin Anda untuk login
-   Untuk Admin Awal atau bawaan email = admin@gmail.com dan password = Admin1234

### 2. Manajemen Pengguna

-   Buka menu Users
-   Operasi CRUD yang tersedia:
    -   Create: Tambah pengguna baru dengan nama, email, peran, dan kata sandi
    -   Read: Lihat semua pengguna dalam sistem
    -   Update: Ubah detail pengguna
    -   Delete: Hapus pengguna dari sistem

Contoh Data Pengguna:

```php
name: "John Doe"
email: "johndoe@example.com"
role: "Admin" atau "User"
password: "Admin1234"
```

### 3. Manajemen Layanan

-   Buka menu Services
-   Operasi CRUD:
    -   Create: Tambah layanan baru
    -   Read: Lihat semua layanan
    -   Update: Ubah detail layanan
    -   Delete: Hapus layanan

Contoh Data Layanan:

```php
user_email: "[Pilih dari pengguna yang ada]"
service_name: "Perawatan Rambut"
service_type: "Premium"
phone: "08123456789"
date_booking: "2024-12-28 14:30:00"
```

### 4. Manajemen Produk

-   Buka menu Products
-   Field yang tersedia:
    ```php
    image: [Upload gambar produk]
    name: "Smoothing"
    title_one: "Smoothing One Step"
    title_two: "Smoothing Jepang"
    ```

### 5. Manajemen Harga

-   Buka menu Prices
-   Field yang tersedia:
    ```php
    product_id: [Pilih dari produk yang ada]
    price_type: "Product One" atau "Product Two"
    name: "Pendek Bob"
    price: "10000"
    ```

## 📱 Proses Pemesanan Pelanggan

1. Kunjungi halaman utama
2. Klik tombol "Book Now"
3. Isi formulir pemesanan:
    - Nama Layanan
    - Tipe Layanan
    - Nomor Telepon
    - Tanggal dan Waktu Booking
4. Kirim pemesanan
5. Tunggu konfirmasi

## 🔧 Penyelesaian Masalah

Jika Anda mengalami masalah:

1. Cek Login user jika dia mengarah ke home maka semua berhasil. jika tidak ganti semua conten dengan yang ada di zip file
2. Periksa log Laravel di `storage/logs`
3. Pastikan konfigurasi database sudah benar
4. Verifikasi semua ekstensi PHP yang diperlukan sudah terpasang
5. Pastikan direktori storage bisa ditulis

## 📝 Lisensi

© [2024] Opik Studio
