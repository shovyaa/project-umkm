<?php
// Konfigurasi koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "umkm";

// Membuat koneksi ke database
$conn = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
