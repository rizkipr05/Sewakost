<?php
$host = 'localhost';
$db = 'db_kost';
$user = 'root'; // ganti kalau pakai user lain
$pass = '';     // ganti sesuai password MySQL kamu

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}
?>
