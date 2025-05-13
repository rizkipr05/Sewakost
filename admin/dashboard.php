<?php
include '../inc/auth.php';
if (!is_admin()) {
    echo "Akses ditolak!";
    exit;
}
?>

<h1>Dashboard Admin</h1>
<p>Selamat datang, <?= $_SESSION['user']['name'] ?>!</p>
<a href="../logout.php">Logout</a>
