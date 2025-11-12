# Jago Sepeda - Sistem Manajemen Pelatihan Pegawai

Jago Sepeda (disebut "JagoPedia" dalam dokumen desain) adalah sistem berbasis web yang bertujuan untuk memberikan pelatihan kepada calon pegawai toko sepeda. Tujuan utamanya adalah untuk meningkatkan pemahaman dan pengetahuan pegawai terkait jenis sepeda, *sparepart*, dan komponen pelengkap lainnya. Sistem ini dikembangkan sebagai solusi atas permasalahan sumber daya manusia di toko sepeda, di mana proses pelatihan manual membebani manajer dan kurang efisien.

## Latar Belakang Masalah

Berdasarkan analisis bisnis proses, proses pelatihan yang ada saat ini memiliki beberapa kendala:
* **Beban Kerja Manajer:** Manajer harus turun tangan langsung untuk melatih pegawai baru, yang memakan waktu dari tugas operasional toko lainnya.
* **Keterbatasan SDM:** Pegawai senior seringkali sibuk dengan operasional toko sehingga tidak dapat membantu pelatihan secara maksimal.
* **Tidak Terstruktur:** Proses pelatihan dilakukan secara manual dan tidak memiliki materi yang terstruktur, sehingga butuh waktu lama dan kurang efisien.

## Solusi yang Ditawarkan

Sistem JagoPedia ini dirancang untuk mengoptimalkan proses pelatihan dengan cara:
* **Pelatihan Mandiri:** Pegawai *training* dapat mengakses kursus dan belajar secara mandiri melalui materi yang telah disiapkan di sistem.
* **Monitoring Efisien:** Manajer tidak perlu lagi mengawasi secara langsung, namun cukup memantau progres dan laporan hasil evaluasi dari sistem.
* **Evaluasi Objektif:** Sistem menyediakan tes evaluasi (kuis) untuk mengukur pemahaman pegawai, membuat penilaian lebih terstandarisasi dan objektif.

## Fitur Utama

Sistem ini memiliki dua peran utama dengan fungsionalitas yang berbeda: **Manajer** dan **Pegawai Training**.

### Untuk Pegawai Training (Pegawai)

* **Dashboard (`homepage-pgw.php`):** Menampilkan ringkasan progres kursus dan hasil kuis terakhir.
* **Halaman Kursus (`coursepage-pgw.php`):** Menampilkan semua bab kursus yang tersedia. Pegawai dapat memfilter kursus yang sudah "Tuntas" dan yang belum.
* **Materi Pembelajaran:** Pegawai dapat mengakses materi dalam bentuk video, dokumen (PDF), dan mengerjakan kuis interaktif di dalam setiap bab kursus.
* **Hasil Kuis (`resultpage-pgw.php`):** Melihat rekapitulasi nilai dari semua kuis yang telah dikerjakan.
* **Review Kuis (`reviewpage.php`):** Meninjau kembali jawaban kuis untuk melihat mana yang benar dan salah.
* **Manajemen Profil (`profilepage-pgw.php` & `editprofile-pgw.php`):** Melihat informasi pribadi dan mengedit data seperti tanggal lahir, telepon, dan alamat.
* **Pusat Pelaporan (`reportpage.php`):** Fitur multi-langkah untuk mengirimkan laporan masalah (bug, masalah konten, dll) kepada manajer/admin.

### Untuk Manajer (Manajer)

* **Dashboard (`homepage-mnj.php`):** Menampilkan ringkasan kursus yang telah dibuat dan progres dari setiap pegawai.
* **Manajemen Kursus (`coursepage-mnj.php`):** Menambahkan, mengedit, dan mengelola bab serta materi kursus (PDF, Video, Kuis).
* **Editor Kuis (`newquiz-mnj.php`):** Halaman khusus untuk membuat soal kuis baru, menambahkan opsi jawaban, dan menentukan jawaban yang benar.
* **Monitoring Progres (`progresspage-mnj.php`):** Memantau progres keseluruhan setiap pegawai dan melihat laporan rinci hasil kuis per pegawai.
* **Manajemen Profil (`profilepage-mnj.php` & `editprofile-mnj.php`):** Mengelola profil pribadi manajer.
* **Pusat Pelaporan (`reportpage-mnj.php`):** Menggunakan fitur pelaporan.

## Teknologi yang Digunakan

* **Backend:** PHP (Sistem berbasis Sesi untuk autentikasi dan otorisasi).
* **Frontend:** HTML, Tailwind CSS.
* **Database:** MySQL / MariaDB.
* **Server (Lokal):** XAMPP (Apache).

## Instalasi dan Setup Lokal

1.  **Salin Proyek:** Salin atau *clone* folder `rbpl-project` ini ke dalam direktori `htdocs` di XAMPP Anda.
2.  **Setup Database:**
    * Jalankan modul Apache dan MySQL di XAMPP.
    * Buka `phpMyAdmin` (biasanya `http://localhost/phpmyadmin`).
    * Buat database baru dengan nama `user-jagopedia`.
    * Pilih database `user-jagopedia`, buka tab **Import**, dan pilih file `user-jagopedia.sql` yang ada di dalam folder proyek ini.
3.  **Konfigurasi Koneksi:**
    * Buka file `connect.php`.
    * Pastikan `$hostname`, `$username`, `$password`, dan `$database` sesuai dengan pengaturan MySQL Anda (default XAMPP biasanya sudah benar).
4.  **Jalankan Proyek:**
    * Buka browser dan navigasikan ke `http://localhost/[nama-folder-proyek]/loginpage.php`.

## Cara Menggunakan (Akun Demo)

Anda dapat login menggunakan akun demo berikut yang sudah disiapkan di `checklogin.php`:

* **Akun Manajer:**
    * **Email:** `manager@jagosepeda.com`
    * **Password:** `manager123`

* **Akun Pegawai:**
    * **Email:** `pegawai1@jagosepeda.com`
    * **Password:** `pegawai1*`
