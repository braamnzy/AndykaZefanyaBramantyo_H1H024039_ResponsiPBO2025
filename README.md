![Recording 2025-11-29 174651](https://github.com/user-attachments/assets/7057fc8c-7c9c-4576-b3ce-4d4c858aec45)
Nama : Andyka Zefanya Bramantyo
NIM : H1H024039
Shift Awal : C
Shift Akhir : C

Penjelasan Kode & Aplikasi
- Index php :
  Halaman beranda menampilkan informasi Pokémon (nama, tipe, level, HP, special move) dan statistik (Strength, Speed, Durability) dalam bentuk progress bar.
  Dimulai dengan sebuah session PHP dan dapat diakhiri dengan reset.
  Pembuatan objek berdasarkan input dari form (Polimorfisme), disimpan di session, dan dipanggil untuk menampilkan data.
  Fungsi percent() digunakan untuk mengubah nilai statistik menjadi persentase agar bisa ditampilkan di progress bar.

  - Latihan.php :
  Halaman ini digunakan untuk melakukan latihan pada Pokémon.
  Jika session Pokémon belum ada, otomatis dibuat objek Squirtle.
  Form meminta input pengguna untuk memilih Jenis latihan dan Intensitas latihan] (1-100%)
  Setelah disubmit, Method pelatihan() dipanggil untuk menambahkan nilai atribut Pokémon sesuai jenis dan intensitas

  - Riwayat.php :
  Halaman ini digunakan untuk menampilkan riwayat latihan Pokémon yang telah dilakukan.
  Riwayat disimpan dalam file JSON (riwayat.json).

  - Tambahan: Saya menggunakan 2 Class dan 2 Objek untuk visualisasi Polimorfisme

  Pilar OOP
  - Polimorfisme : Abstract Function yang diimplementasikan secara berbeda tiap Class di pokemon.php
  - Abstraksi : Class Pokemon di pokemon.php
  - Enkapsulasi : Atribut dan Method dalam 1 Class, memiliki access specifier
  - Inheritance : Class Squirtle dan Chalizard mewarisi pokemon

Cara Menjalankan Aplikasi 
  - Masuk ke Direktori Web disimpan
  - Start session dengan php -S localhost:8000 di terminal.
  - Di web masuk ke http://localhost:8000/index.php.
  - Untuk Memulai, pilih Objek Pokemon yang akan dibuat (Polimorfisme).
  - Secara default, tiap Objek memiliki informasi berbeda (tipe, HP, strength .dll).
  - Klik mulai latihan / riwayat latihan / reset pokemon.
  - Setelah mulai latihan, User dapat menentukan intensitas pelatihan dan jenis pelatihan.
  - Secara default, tiap Objek memiiliki tingkat pelatihan yang berbeda (Chalizard prioritaskan Strength, Squirtle prioritaskan Durability)
  - Setelah mulai latihan, User ditampilkan informasi pelatihan dan perubahan pada objek.
  - Pada riwayat, ditampilkan daftar riwayat pada session saat anda membuka koneksi ke web tersebut.

