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

  Konsep OOP
  - Polimorfisme : Abstract Function yang diimplementasikan secara berbeda tiap Class di pokemon.php
  - Abstraksi : Class Pokemon di pokemon.php
  - Enkapsulasi : Atribut dan Method dalam 1 Class, memiliki access specifier
  - Inheritance : Class Squirtle dan Chalizard mewarisi pokemon

Cara Menjalankan Aplikasi 
  - Masuk ke Direktori Web disimpan
  - Start session dengan php -S localhost:8000 di terminal
  - Di web masuk ke http://localhost:8000/index.php


