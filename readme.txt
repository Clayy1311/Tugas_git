# Form Contact Us

Formulir kontak ini memungkinkan pengguna mengirimkan saran kepada admin website.

## Fitur
- Formulir dengan input untuk NIM, nama, kelas, jenis kelamin, email, dan pesan.
- Menyimpan data ke database MySQL.
- Validasi data di server menggunakan PHP.

## Prerequisites
- **MAMP/XAMPP**: Untuk menjalankan server lokal Apache dan MySQL.
- **PHP**: Untuk menjalankan skrip server-side.
- **MySQL**: Database untuk menyimpan data.

## Instalasi

1. **Download dan Install MAMP/XAMPP**
   - [MAMP](https://www.mamp.info/en/downloads/) atau [XAMPP](https://www.apachefriends.org/index.html).

2. **Setup Database**
   - Jalankan MAMP/XAMPP.
   - Akses phpMyAdmin melalui `http://localhost:8888/phpMyAdmin`.
   - Buat database `form_kontak` dan tabel `kontak` dengan query berikut:
     ```sql
     CREATE TABLE kontak (
         id INT AUTO_INCREMENT PRIMARY KEY,
         nim VARCHAR(50) NOT NULL,
         nama VARCHAR(100) NOT NULL,
         kelas VARCHAR(50) NOT NULL,
         jenis_kelamin VARCHAR(10) NOT NULL,
         email VARCHAR(100) NOT NULL,
         pesan TEXT NOT NULL
     );
     ```

3. **Konfigurasi File PHP**
   - Tempatkan file PHP di direktori `htdocs` (misalnya `/Applications/MAMP/htdocs/form`).
   - Sesuaikan kredensial database di `proses.php`.

4. **Form HTML**
   - Pastikan file HTML berada di direktori yang sama dengan `proses.php`.

5. **Menambahkan CSS**
   - Buat file `style.css` di direktori yang sama dengan file HTML untuk styling tambahan.

## Cara Menggunakan
1. **Jalankan Server**
   - Buka MAMP/XAMPP dan aktifkan server Apache dan MySQL.

2. **Akses Form**
   - Buka browser dan akses `http://localhost:8888/form` (sesuaikan dengan direktori dan port).

