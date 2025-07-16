# 📘 Aplikasi Buku Tamu – CodeIgniter 3

Aplikasi ini merupakan sistem buku tamu sederhana menggunakan **CodeIgniter 3** di mana pengunjung dapat mengisi:
- Nama
- Email
- Pesan

Semua data akan disimpan ke database dan ditampilkan di halaman admin.

---

## 🚀 Fitur Utama

- 📥 Form input tamu (siapa saja bisa isi)
- 🔒 Halaman admin tanpa login
- 📊 Filter data berdasarkan tanggal
- 📤 Export data tamu ke CSV
- ✅ Validasi input menggunakan `form_validation`

---

## ⚙️ Teknologi yang Digunakan

- PHP 7.4+
- CodeIgniter 3.x
- MySQL

---

## 📁 Struktur Utama Folder

```
bukutamu_ci3/
├── application/
│   ├── controllers/
│   │   ├── Guest.php
│   │   └── Admin.php
│   ├── models/
│   │   └── Guest_model.php
│   ├── views/
│       ├── guest_form.php
│       ├── guest_success.php
│       ├── admin_list.php
│       └── csv_export.php
├── system/
├── index.php
└── ...
```

---

## 🧪 Cara Menjalankan

1. **Jalankan XAMPP**, aktifkan:
   - ✅ Apache
   - ✅ MySQL

2. **Import database:**
   - Buka `http://localhost/phpmyadmin`
   - Buat database baru: `bukutamu`
   - Import struktur tabel:
     ```sql
     CREATE TABLE guests (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100) NOT NULL,
       email VARCHAR(100) NOT NULL,
       message TEXT NOT NULL,
       created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
     );
     ```

3. **Pindahkan folder project** ke:
   ```
   C:\xampp\htdocs\bukutamu_ci3
   ```

4. **Akses aplikasi melalui browser:**

   - 📝 Form Buku Tamu:  
     [http://localhost/bukutamu_ci3/index.php/guest](http://localhost/bukutamu_ci3/index.php/guest)

   - 🔐 Halaman Admin (daftar tamu):  
     [http://localhost/bukutamu_ci3/index.php/admin](http://localhost/bukutamu_ci3/index.php/admin)

---

## 🧯 Catatan Penting

- Pastikan file `guest_success.php` ada di `application/views`
- Jika muncul error `site_url()` tidak ditemukan, aktifkan helper `url` di `application/config/autoload.php`
  ```php
  $autoload['helper'] = array('url', 'form');
  ```
- Jika menggunakan PHP 8.2+, nonaktifkan pesan deprecated dengan cara mengubah `error_reporting()` di `index.php`
```
error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED);

```

---

## 📦 Lisensi

Proyek ini dibuat untuk pretest PT Kreatot Solusi Informasi