<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9a0d72aa0a.js" crossorigin="anonymous"></script>

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Kost Putri</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Putri</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link"><i class="fa-solid fa-house me-2"></i>Home</a>
                    <a href="kamar.php" class="nav-item nav-link"><i class="fa-solid fa-bed me-2"></i>Kamar</a>
                    <a href="penghuni.php" class="nav-item nav-link"><i
                            class="fa-solid fa-user-tag me-2"></i>Penghuni</a>
                    <a href="pembayaran.php" class="nav-item nav-link active"><i
                            class=" fa-solid fa-money-check-dollar me-2"></i>Pembayaran</a>
                    <a href="laporan.php" class="nav-item nav-link"><i
                            class="fa-solid fa-file-invoice me-2"></i>Laporan</a>
                    <a href="pengaturan.php" class="nav-item nav-link"><i
                            class="fa-solid fa-gear me-2"></i>Pengatuiran</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
  <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Putri send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Putri send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Putri send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt=""
                                style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Putri</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

           <div class="container-fluid pt-4 px-4">

    <!-- Riwayat Pembayaran -->
    <div class="bg-light rounded p-4 mb-4">
        <h6 class="mb-4">Riwayat Pembayaran</h6>
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Penghuni</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Nominal (Rp)</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ayu</td>
                        <td>2025-05-01</td>
                        <td>500.000</td>
                        <td><span class="badge bg-success">Terverifikasi</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Budi</td>
                        <td>2025-05-10</td>
                        <td>500.000</td>
                        <td><span class="badge bg-warning">Menunggu Verifikasi</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Verifikasi Pembayaran -->
    <div class="bg-light rounded p-4 mb-4">
        <h6 class="mb-4">Verifikasi Pembayaran</h6>
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Penghuni</th>
                        <th>Bukti Pembayaran</th>
                        <th>Tanggal Kirim</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Budi</td>
                        <td><a href="bukti/bukti_budi.jpg" target="_blank">Lihat</a></td>
                        <td>2025-05-10</td>
                        <td>
                            <form action="verifikasi_pembayaran.php" method="POST">
                                <input type="hidden" name="id_transaksi" value="2">
                                <button type="submit" class="btn btn-sm btn-success">Verifikasi</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pengelolaan Tagihan -->
     <div class="container-fluid pt-4 px-4">

        <!-- Riwayat Pembayaran -->
        <div class="bg-light rounded p-4 mb-4">
            <h6 class="mb-4">Riwayat Pembayaran</h6>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Penghuni</th>
                            <th>Tanggal Pembayaran</th>
                            <th>Nominal (Rp)</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($riwayat_pembayaran)): ?>
                            <?php foreach ($riwayat_pembayaran as $no => $data): ?>
                                <tr>
                                    <td><?= $no + 1 ?></td>
                                    <td><?= $data['nama_penghuni'] ?></td>
                                    <td><?= $data['tanggal_pembayaran'] ?></td>
                                    <td><?= number_format($data['nominal'], 0, ',', '.') ?></td>
                                    <td>
                                        <span class="badge <?= $data['status'] == 'Terverifikasi' ? 'bg-success' : 'bg-warning' ?>">
                                            <?= $data['status'] ?>
                                        </span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Verifikasi Pembayaran -->
        <div class="bg-light rounded p-4 mb-4">
            <h6 class="mb-4">Verifikasi Pembayaran</h6>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Penghuni</th>
                            <th>Bukti</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($verifikasi_pembayaran)): ?>
                            <?php foreach ($verifikasi_pembayaran as $no => $row): ?>
                                <tr>
                                    <td><?= $no + 1 ?></td>
                                    <td><?= $row['nama_penghuni'] ?></td>
                                    <td><a href="bukti/<?= $row['bukti'] ?>" target="_blank">Lihat</a></td>
                                    <td><?= $row['tanggal_pembayaran'] ?></td>
                                    <td>
                                        <form method="POST">
                                            <input type="hidden" name="verifikasi_id" value="<?= $row['id'] ?>">
                                            <button type="submit" name="verifikasi_btn" class="btn btn-sm btn-success">Verifikasi</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pengelolaan Tagihan -->
        <div class="bg-light rounded p-4">
            <h6 class="mb-4">Pengelolaan Tagihan</h6>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Penghuni</th>
                            <th>Periode</th>
                            <th>Status Tagihan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($tagihan_list)): ?>
                            <?php foreach ($tagihan_list as $no => $row): ?>
                                <tr>
                                    <td><?= $no + 1 ?></td>
                                    <td><?= $row['nama_penghuni'] ?></td>
                                    <td><?= $row['periode'] ?></td>
                                    <td>
                                        <span class="badge <?= $row['status'] == 'Lunas' ? 'bg-success' : 'bg-danger' ?>">
                                            <?= $row['status'] ?>
                                        </span>
                                    </td>
                                    <td>
                                        <?php if ($row['status'] == 'Lunas'): ?>
                                            <button class="btn btn-sm btn-primary">Perpanjang</button>
                                        <?php else: ?>
                                            <button class="btn btn-sm btn-warning">Tagih Sekarang</button>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>




            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">kost putri</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            Designed By <a href="https://kostputri.com">By Team Hore</a>
                            </br>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="kamar.php" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
<?php
// ================= Koneksi & Proses PHP (di bagian paling bawah) =================
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_kost";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil riwayat pembayaran
$riwayat_pembayaran = [];
$sql = "SELECT * FROM pembayaran";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $riwayat_pembayaran[] = $row;
}

// Ambil data untuk verifikasi
$verifikasi_pembayaran = [];
$sql = "SELECT * FROM pembayaran WHERE status='Menunggu Verifikasi'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $verifikasi_pembayaran[] = $row;
}

// Ambil data tagihan
$tagihan_list = [];
$sql = "SELECT * FROM tagihan";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $tagihan_list[] = $row;
}

// Proses verifikasi pembayaran
if (isset($_POST['verifikasi_btn'])) {
    $id = $_POST['verifikasi_id'];
    $update = "UPDATE pembayaran SET status='Terverifikasi' WHERE id='$id'";
    if (mysqli_query($conn, $update)) {
        echo "<script>alert('Berhasil diverifikasi'); window.location.href='pembayaran.php';</script>";
    } else {
        echo "<script>alert('Verifikasi gagal');</script>";
    }
}
?>