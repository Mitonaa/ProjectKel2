<?php

// Konfigurasi koneksi ke database
$servername = "localhost";  // Ganti dengan nama server Anda
$username = "root";  // Ganti dengan username database Anda
$password = "";  // Ganti dengan password database Anda
$dbname = "db_ijs";  // Ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
?>
