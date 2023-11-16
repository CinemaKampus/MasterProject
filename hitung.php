<?php
// Konfigurasi koneksi ke database
$servername = "localhost"; // Ganti sesuai dengan nama server database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "db_cinema campus"; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query SQL untuk mengambil jumlah baris dalam tabel tertentu
$tableName = "tb_sub"; // Ganti dengan nama tabel yang ingin Anda hitung
$sql = "SELECT COUNT(*) as total FROM " . $tableName;

$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    $count = $row['total'];
    echo  $count . " subscriber"    ;
} else {
    echo "Gagal menjalankan query: " . $conn->error;
}

// Menutup koneksi database
$conn->close();
?>
