# 💻 SIFO Laptop - Sistem Rekomendasi Laptop (Knowledge-Based Filtering & RBAC)

SIFO Laptop adalah aplikasi katalog dan sistem rekomendasi laptop berbasis web. Sistem ini menggunakan metode **Knowledge-Based Filtering (KBF)** untuk memberikan rekomendasi laptop terbaik berdasarkan kebutuhan nyata pengguna (tujuan penggunaan, budget, dan preferensi merek), serta dilengkapi dengan **Role-Based Access Control (RBAC)** untuk membatasi hak akses pengelolaan data.

---

## 🚀 Fitur Utama

1. **Knowledge-Based Filtering (KBF) Search Engine**:
   - Memandu pengguna umum (non-admin) menemukan laptop ideal melalui kuesioner interaktif (Wizard).
   - Memetakan kebutuhan fungsional (seperti *Gaming, Office, Programming*) ke batas performa spesifikasi minimum menggunakan sistem pembobotan matematis (`bobot`).
2. **Role-Based Access Control (RBAC)**:
   - **Admin**: Akses penuh untuk mengelola data laptop, kategori, dan fitur laptop (menambahkan bobot performa).
   - **Non-Admin (Regular User)**: Akses terbatas (hanya dapat melihat data di panel admin tanpa izin melakukan operasi tambah, ubah, atau hapus).
3. **Pencegahan Celah Keamanan (Security Hardening)**:
   - Enkripsi password menggunakan algoritma **Bcrypt**.
   - Keamanan query database menggunakan **Prepared Statements** untuk mencegah serangan *SQL Injection*.

---

## 🛠️ Prasyarat Sistem

Sebelum menjalankan aplikasi, pastikan komputer Anda telah terinstal:
- **PHP** >= 8.0
- **MySQL / MariaDB**
- **Web Server** (XAMPP / Laragon / WampServer)

---

## ⚙️ Panduan Instalasi & Pengaturan

Ikuti langkah-langkah berikut untuk menjalankan aplikasi di lingkungan lokal (*local development*):

1. **Pindahkan Folder Project**:
   Ekstrak atau pindahkan folder `sifo-laptop` ke dalam direktori root server lokal Anda:
   - XAMPP: `C:\xampp\htdocs\sifo-laptop`
   - Laragon: `C:\laragon\www\sifo-laptop`

2. **Aktifkan Server**:
   Buka control panel web server Anda (misal: XAMPP) dan aktifkan modul **Apache** dan **MySQL**.

3. **Import Database**:
   - Buka browser dan akses **phpMyAdmin** (`http://localhost/phpmyadmin`).
   - Buat database baru dengan nama **`toko_laptop`**.
   - Pilih database tersebut, klik tab **Import**, pilih file [data_laptop.sql](data_laptop.sql), lalu klik **Go** atau **Import**.

4. **Konfigurasi Database**:
   Buka file [config.php](config.php) dan sesuaikan konfigurasi koneksi database Anda jika berbeda:
   ```php
   $db = mysqli_connect("localhost", "username_mysql", "password_mysql", "toko_laptop");
   ```

5. **Akses Aplikasi**:
   Buka browser Anda dan akses URL berikut:
   `http://localhost/sifo-laptop`

---

## 🔐 Akun Pengujian (Kredensial Default)

Untuk menguji fitur autentikasi dan otorisasi (RBAC), Anda dapat menggunakan akun bawaan berikut:

| Nama Pengguna | Username | Password | Role (Hak Akses) |
| :--- | :--- | :--- | :--- |
| **Administrator** | `admin` | `admin123` | **Admin** (Akses Penuh CRUD) |
| **Regular User** | `user` | `user123` | **Non-Admin** (Read-Only) |

---

## 🧑‍💻 Panduan untuk Developer (Development Guide)

### 1. Struktur Folder Penting
- `/admin` : File frontend halaman administrasi (view, tambah, edit data).
- `/auth` : Halaman login dan logout.
- `/controllers` : Berisi query database utama dan logika autentikasi.
- `index.php` : Landing page dan form wizard KBF.
- `produk.php` : Halaman penampil katalog produk sekaligus mesin filtering KBF.

### 2. Logika Aturan KBF (Rule Engine)
Di dalam [produk.php](produk.php), sistem KBF memetakan pilihan `tujuan` penggunaan pengguna menjadi batas minimal bobot spesifikasi:
- **Office Ringan / Belajar**: RAM minimal bobot 4, CPU minimal bobot 1, Storage minimal bobot 1, GPU minimal bobot 1.
- **Bisnis / Kerja Produktif**: RAM minimal bobot 8, CPU minimal bobot 3, Storage minimal bobot 2, GPU minimal bobot 1.
- **Desain Grafis / Editing Video**: RAM minimal bobot 8, CPU minimal bobot 5, Storage minimal bobot 2, GPU minimal bobot 3.
- **Gaming Berat / Render 3D**: RAM minimal bobot 16, CPU minimal bobot 5, Storage minimal bobot 2, GPU minimal bobot 4.
- **Programming / Developer**: RAM minimal bobot 16, CPU minimal bobot 7, Storage minimal bobot 2, GPU minimal bobot 2.

*Query SQL akan menyeleksi laptop yang memiliki nilai bobot fitur di atas atau sama dengan (`>=`) nilai minimal di atas.*

### 3. Cara Menambahkan Tipe Komponen Baru dengan Bobot
Ketika Anda menambahkan fitur baru (misal tipe RAM atau CPU baru) melalui Dashboard Admin:
1. Masuk ke halaman **Fitur Laptop**.
2. Klik **Tambah Fitur**.
3. Isi Jenis Fitur, Nama Fitur, dan **Bobot** (berikan nilai numerik tinggi untuk spesifikasi yang lebih cepat, misal: RAM 32GB = `32`, RAM 4GB = `4`).
4. Klik **Submit**. Sistem KBF secara otomatis akan mendeteksi tingkatan performa baru ini tanpa perlu mengubah kode database.
