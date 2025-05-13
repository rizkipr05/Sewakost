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
                    <a href="penghuni.php" class="nav-item nav-link active"><i
                            class="fa-solid fa-user-tag me-2"></i>Penghuni</a>
                    <a href="pembayaran.php" class="nav-item nav-link"><i
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

        <!-- Laporan Keuangan -->
        <div class="bg-light rounded p-4 mb-4">
            <h6 class="mb-4">Laporan Keuangan</h6>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Bulan</th>
                            <th>Pemasukan (Rp)</th>
                            <th>Pengeluaran (Rp)</th>
                            <th>Saldo (Rp)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($laporan_keuangan)) : ?>
                            <?php foreach ($laporan_keuangan as $data) : ?>
                                <tr>
                                    <td><?= $data['bulan'] ?></td>
                                    <td><?= number_format($data['pemasukan'], 0, ',', '.') ?></td>
                                    <td><?= number_format($data['pengeluaran'], 0, ',', '.') ?></td>
                                    <td><?= number_format($data['saldo'], 0, ',', '.') ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Laporan Penghuni -->
        <div class="bg-light rounded p-4 mb-4">
            <h6 class="mb-4">Laporan Penghuni</h6>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Bulan/Tahun</th>
                            <th>Jumlah Penghuni</th>
                            <th>Statistik Sewa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($laporan_penghuni)) : ?>
                            <?php foreach ($laporan_penghuni as $data) : ?>
                                <tr>
                                    <td><?= $data['periode'] ?></td>
                                    <td><?= $data['jumlah_penghuni'] ?></td>
                                    <td><?= $data['statistik_sewa'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Laporan Pembayaran -->
        <div class="bg-light rounded p-4">
            <h6 class="mb-4">Laporan Pembayaran</h6>
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
                        <?php if (!empty($laporan_pembayaran)) : ?>
                            <?php foreach ($laporan_pembayaran as $no => $data) : ?>
                                <tr>
                                    <td><?= $no + 1 ?></td>
                                    <td><?= $data['nama_penghuni'] ?></td>
                                    <td><?= $data['tanggal_pembayaran'] ?></td>
                                    <td><?= number_format($data['nominal'], 0, ',', '.') ?></td>
                                    <td>
                                        <span class="badge <?= $data['status'] == 'Terbayar' ? 'bg-success' : 'bg-danger' ?>">
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
// ================= KONEKSI DATABASE =================
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_kost";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// ================= LAPORAN KEUANGAN =================
$laporan_keuangan = [];
$query = "
    SELECT 
        DATE_FORMAT(tanggal_pembayaran, '%Y-%m') AS bulan,
        SUM(CASE WHEN status = 'Terbayar' THEN nominal ELSE 0 END) AS pemasukan,
        0 AS pengeluaran,
        SUM(CASE WHEN status = 'Terbayar' THEN nominal ELSE 0 END) AS saldo
    FROM pembayaran
    GROUP BY bulan
    ORDER BY bulan DESC
";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $laporan_keuangan[] = $row;
}

// ================= LAPORAN PENGHUNI =================
$laporan_penghuni = [];
$query = "
    SELECT 
        DATE_FORMAT(tanggal_masuk, '%Y-%m') AS periode,
        COUNT(*) AS jumlah_penghuni,
        CONCAT(ROUND((COUNT(*) / (SELECT COUNT(*) FROM penghuni) * 100), 1), '% dari total') AS statistik_sewa
    FROM penghuni
    GROUP BY periode
    ORDER BY periode DESC
";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $laporan_penghuni[] = $row;
}

// ================= LAPORAN PEMBAYARAN =================
$laporan_pembayaran = [];
$query = "SELECT * FROM pembayaran ORDER BY tanggal_pembayaran DESC";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $laporan_pembayaran[] = $row;
}
?>