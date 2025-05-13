<?php
include '../inc/auth.php'; // path diperbaiki

if (!is_user()) {
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kost Putri Rajabasa - Kost Nyaman Seperti di Rumah</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css"> 
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Kost Putri<span class="text-primary"> Rajabasa</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kamar">Kamar</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#fasilitas">Fasilitas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                    <li class="nav-item ms-lg-3"><a class="btn btn-outline-primary"  <?= htmlspecialchars($_SESSION['user']['name']) ?>! href="">Profil</a></li>
                    <li class="nav-item ms-lg-2"><a class="btn btn-danger" href="../logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="beranda">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1>Temukan Kenyamanan Seperti di Rumah</h1>
                    <p class="lead mb-4">Kost Putri Rajabasa menyediakan kamar kost dengan kualitas terbaik dan fasilitas lengkap untuk mahasiswa dan pekerja</p>
                    <a href="#kamar" class="btn btn-primary btn-lg">Lihat Kamar</a>
                    <a href="#kontak" class="btn btn-outline-light btn-lg ms-2">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Keunggulan -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 mb-4">
                    <h2>Mengapa Memilih Kost Putri Rajabasa?</h2>
                    <p class="lead">Kenyamanan dan keamanan adalah prioritas utama kami</p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h4>Lokasi Strategis</h4>
                    <p>Dekat dengan kampus, rumah sakit, pusat perbelanjaan, dan akses transportasi umum</p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4>Keamanan 24 Jam</h4>
                    <p>Dilengkapi dengan CCTV dan penjaga keamanan untuk ketenangan Anda</p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-icon">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <h4>Fasilitas Lengkap</h4>
                    <p>Wi-Fi cepat, dapur bersama, area parkir, dan ruang komunal yang nyaman</p>
                </div>
            </div>
        </div>
    </section>

     <!-- Carousel -->
     <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2>Galeri Kost Putri Rajabasa</h2>
                    <p class="lead">Lihat suasana kost yang nyaman dan penuh kehangatan</p>
                </div>
                <div class="col-lg-10 mx-auto">
                    <div id="kostCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#kostCarousel" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#kostCarousel" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#kostCarousel" data-bs-slide-to="2"></button>
                            <button type="button" data-bs-target="#kostCarousel" data-bs-slide-to="3"></button>
                        </div>
                        <div class="carousel-inner rounded">
                            <div class="carousel-item active">
                                <img src="asset/img/KasurLemari.jpg" class="d-block w-100" alt="Kamar Tipe Premium">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Kamar Tipe Premium</h5>
                                    <p>Kamar luas dengan kamar mandi dalam dan balkon pribadi</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="asset/img/bg.jpg" class="d-block w-100" alt="Ruang Komunal">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Ruang Komunal</h5>
                                    <p>Area bersantai dan bersosialisasi dengan sesama penghuni</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="asset/img/dapur.jpg" class="d-block w-100" alt="Dapur Bersama">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Dapur Bersama</h5>
                                    <p>Fasilitas memasak lengkap untuk kebutuhan sehari-hari</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="asset/img/parkir.jpg" class="d-block w-100" alt="Area Parkir">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Area Parkir</h5>
                                    <p>Parkir yang luas dan aman untuk kendaraan Anda</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#kostCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#kostCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Daftar Kamar -->
    <section id="kamar" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2>Kamar Tersedia</h2>
                    <p class="lead">Pilih kamar sesuai dengan kebutuhan dan budget Anda</p>
                </div>
            </div>
            <div class="row">
                <!-- Kamar Tipe A -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card room-card h-100">
                        <img src="/api/placeholder/400/300" class="card-img-top" alt="Kamar Tipe A">
                        <div class="card-body">
                            <h5 class="card-title">Kamar Tipe A - Ekonomis</h5>
                            <div class="room-price mb-3">Rp 1.200.000<span class="text-muted">/bulan</span></div>
                            <p class="card-text">Kamar nyaman dengan ukuran 3x3m, cocok untuk mahasiswa dengan budget terbatas.</p>
                            <div class="mb-3">
                                <span class="room-facility"><i class="fas fa-bed me-1"></i> Single Bed</span>
                                <span class="room-facility"><i class="fas fa-fan me-1"></i> Kipas Angin</span>
                                <span class="room-facility"><i class="fas fa-toilet me-1"></i> K. Mandi Bersama</span>
                            </div>
                            <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                
                <!-- Kamar Tipe B -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card room-card h-100">
                        <img src="/api/placeholder/400/300" class="card-img-top" alt="Kamar Tipe B">
                        <div class="card-body">
                            <h5 class="card-title">Kamar Tipe B - Standard</h5>
                            <div class="room-price mb-3">Rp 1.500.000<span class="text-muted">/bulan</span></div>
                            <p class="card-text">Kamar ukuran 3x4m dengan meja belajar dan lemari pakaian yang luas.</p>
                            <div class="mb-3">
                                <span class="room-facility"><i class="fas fa-bed me-1"></i> Double Bed</span>
                                <span class="room-facility"><i class="fas fa-fan me-1"></i> AC</span>
                                <span class="room-facility"><i class="fas fa-toilet me-1"></i> K. Mandi Bersama</span>
                                <span class="room-facility"><i class="fas fa-desk me-1"></i> Meja Belajar</span>
                            </div>
                            <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                
                <!-- Kamar Tipe C -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card room-card h-100">
                        <img src="/api/placeholder/400/300" class="card-img-top" alt="Kamar Tipe C">
                        <div class="card-body">
                            <h5 class="card-title">Kamar Tipe C - Premium</h5>
                            <div class="room-price mb-3">Rp 2.000.000<span class="text-muted">/bulan</span></div>
                            <p class="card-text">Kamar luas 4x5m dengan kamar mandi dalam dan balkon pribadi.</p>
                            <div class="mb-3">
                                <span class="room-facility"><i class="fas fa-bed me-1"></i> Double Bed</span>
                                <span class="room-facility"><i class="fas fa-fan me-1"></i> AC</span>
                                <span class="room-facility"><i class="fas fa-toilet me-1"></i> K. Mandi Dalam</span>
                                <span class="room-facility"><i class="fas fa-desk me-1"></i> Meja Belajar</span>
                                <span class="room-facility"><i class="fas fa-door-open me-1"></i> Balkon</span>
                            </div>
                            <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Carousel -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2>Galeri Kost Putri Rajabasa</h2>
                    <p class="lead">Lihat suasana kost yang nyaman dan penuh kehangatan</p>
                </div>
                <div class="col-lg-10 mx-auto">
                    <div id="kostCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#kostCarousel" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#kostCarousel" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#kostCarousel" data-bs-slide-to="2"></button>
                            <button type="button" data-bs-target="#kostCarousel" data-bs-slide-to="3"></button>
                        </div>
                        <div class="carousel-inner rounded">
                            <div class="carousel-item active">
                                <img src="asset/img/KasurLemari.jpg" class="d-block w-100" alt="Kamar Tipe Premium">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Kamar Tipe Premium</h5>
                                    <p>Kamar luas dengan kamar mandi dalam dan balkon pribadi</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="asset/img/bg.jpg" class="d-block w-100" alt="Ruang Komunal">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Ruang Komunal</h5>
                                    <p>Area bersantai dan bersosialisasi dengan sesama penghuni</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="asset/img/dapur.jpg" class="d-block w-100" alt="Dapur Bersama">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Dapur Bersama</h5>
                                    <p>Fasilitas memasak lengkap untuk kebutuhan sehari-hari</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="asset/img/parkir.jpg" class="d-block w-100" alt="Area Parkir">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Area Parkir</h5>
                                    <p>Parkir yang luas dan aman untuk kendaraan Anda</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#kostCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#kostCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fasilitas -->
    <section id="fasilitas" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2>Fasilitas Kost</h2>
                    <p class="lead">Berbagai fasilitas untuk menunjang kenyamanan Anda</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="facility-card">
                        <i class="fas fa-wifi feature-icon"></i>
                        <h4>Wi-Fi Kecepatan Tinggi</h4>
                        <p>Internet cepat untuk kebutuhan belajar dan hiburan Anda</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="facility-card">
                        <i class="fas fa-utensils feature-icon"></i>
                        <h4>Dapur Bersama</h4>
                        <p>Dilengkapi peralatan masak untuk kebutuhan sehari-hari</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="facility-card">
                        <i class="fas fa-car feature-icon"></i>
                        <h4>Area Parkir</h4>
                        <p>Parkir kendaraan yang luas dan aman 24 jam</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="facility-card">
                        <i class="fas fa-tshirt feature-icon"></i>
                        <h4>Laundry</h4>
                        <p>Layanan laundry dengan biaya terjangkau</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="facility-card">
                        <i class="fas fa-couch feature-icon"></i>
                        <h4>Ruang Komunal</h4>
                        <p>Area bersantai dan bersosialisasi dengan penghuni lain</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="facility-card">
                        <i class="fas fa-video feature-icon"></i>
                        <h4>CCTV 24 Jam</h4>
                        <p>Keamanan terjaga dengan pengawasan kamera 24 jam</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2>Apa Kata Mereka?</h2>
                    <p class="lead">Testimoni dari para penghuni KostKuIbu</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="testimonial-item">
                        <div class="d-flex align-items-center mb-3">
                            <img src="/api/placeholder/80/80" alt="Penghuni 1" class="testimonial-img me-3">
                            <div>
                                <h5 class="mb-0">Anita Wijaya</h5>
                                <small class="text-muted">Mahasiswa</small>
                            </div>
                        </div>
                        <p class="mb-0">"Sudah 2 tahun tinggal di KostKuIbu dan sangat nyaman. Lokasinya dekat kampus, Wi-Fi cepat, dan ibu kostnya sangat baik. Seperti tinggal di rumah sendiri!"</p>
                        <div class="mt-2 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-item">  
                        <div class="d-flex align-items-center mb-3">
                            <img src="/api/placeholder/80/80" alt="Penghuni 2" class="testimonial-img me-3">
                            <div>
                                <h5 class="mb-0">Budi Santoso</h5>
                                <small class="text-muted">Fresh Graduate</small>
                            </div>
                        </div>
                        <p class="mb-0">"Fasilitas lengkap dengan harga terjangkau. Kamar bersih dan nyaman. Penghuni lain juga ramah, jadi bisa menambah koneksi. Sangat recommended!"</p>
                        <div class="mt-2 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-item">
                        <div class="d-flex align-items-center mb-3">
                            <img src="/api/placeholder/80/80" alt="Penghuni 3" class="testimonial-img me-3">
                            <div>
                                <h5 class="mb-0">Citra Lestari</h5>
                                <small class="text-muted">Karyawan Swasta</small>
                            </div>
                        </div>
                        <p class="mb-0">"Yang saya suka dari KostKuIbu adalah kebersihannya terjaga dan lingkungan yang tenang sehingga nyaman untuk istirahat setelah bekerja. Akses ke transportasi umum juga mudah."</p>
                        <div class="mt-2 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section id="kontak" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2>Hubungi Kami</h2>
                    <p class="lead">Jangan ragu untuk menghubungi kami jika ada pertanyaan</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <form id="contactForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukkan nama lengkap">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">No. Telepon/WA</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Masukkan nomor telepon/WA">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Masukkan pesan/pertanyaan Anda"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="card h-100">
                        <div class="card-body">
                        <h5 class="card-title mb-4">Informasi Kontak</h5>
                            <div class="d-flex mb-3">
                                <i class="fas fa-map-marker-alt text-primary me-3" style="font-size: 1.5rem;"></i>
                                <div>
                                    <h6 class="mb-0">Alamat</h6>
                                    <p class="mb-0">Jl. Pendidikan No. 123, Kota Baru<br>Dekat Politeknik Bandar Lampung</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <i class="fas fa-phone-alt text-primary me-3" style="font-size: 1.5rem;"></i>
                                <div>
                                    <h6 class="mb-0">Telepon/WhatsApp</h6>
                                    <p class="mb-0">+62 812-3456-7890</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <i class="fas fa-envelope text-primary me-3" style="font-size: 1.5rem;"></i>
                                <div>
                                    <h6 class="mb-0">Email</h6>
                                    <p class="mb-0">info@kostputrirajabasa.com</p>
                                </div>
                            </div>
                            <div class="d-flex mb-4">
                                <i class="fas fa-clock text-primary me-3" style="font-size: 1.5rem;"></i>
                                <div>
                                    <h6 class="mb-0">Jam Operasional</h6>
                                    <p class="mb-0">Senin - Minggu: 08.00 - 21.00 WIB</p>
                                </div>
                            </div>
                            <div class="ratio ratio-16x9 rounded">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.3930589731244!2d105.2260159!3d-5.356842899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c58ea2aeeeb3%3A0x4bac5dac4cc157e4!2sWrg.Khayuki!5e0!3m2!1sen!2sid!4v1746009189530!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                           </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2>Siap Untuk Memesan Kamar?</h2>
                    <p class="lead mb-0">Dapatkan diskon 10% untuk pembayaran di muka selama 6 bulan</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="#kamar" class="btn btn-light btn-lg">Booking Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h3 class="text-white">Kost Putri<span class="text-primary">Rajabasa</span></h3>
                    <p>Kost nyaman dengan suasana kekeluargaan yang berlokasi strategis di pusat kota. Cocok untuk mahasiswa dan pekerja.</p>
                    <div class="mt-3">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <h5 class="text-white mb-3">Tautan Cepat</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#beranda" class="text-white text-decoration-none">Beranda</a></li>
                        <li class="mb-2"><a href="#kamar" class="text-white text-decoration-none">Kamar</a></li>
                        <li class="mb-2"><a href="#tentang" class="text-white text-decoration-none">Tentang Kami</a></li>
                        <li class="mb-2"><a href="#fasilitas" class="text-white text-decoration-none">Fasilitas</a></li>
                        <li class="mb-2"><a href="#kontak" class="text-white text-decoration-none">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
                    <h5 class="text-white mb-3">Jam Operasional</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">Senin - Jumat: 08.00 - 21.00</li>
                        <li class="mb-2">Sabtu: 09.00 - 20.00</li>
                        <li class="mb-2">Minggu: 10.00 - 18.00</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h5 class="text-white mb-3">Newsletter</h5>
                    <p>Dapatkan info terbaru dan promo spesial dari kami</p>
                    <form>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email Anda" aria-label="Email Anda">
                            <button class="btn btn-outline-light" type="button">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="mt-4 mb-4" style="border-color: rgba(255,255,255,0.1);">
            <div class="row">
                <div class="col-md-6 mb-3 mb-md-0">
                    <p class="mb-0">© 2025 kostputrirajabasa. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-white text-decoration-none me-3">Kebijakan Privasi</a>
                    <a href="#" class="text-white text-decoration-none">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/6281234567890" class="position-fixed bottom-0 end-0 mb-4 me-4 btn btn-success rounded-circle p-3" style="z-index: 999;">
        <i class="fab fa-whatsapp fa-2x"></i>
    </a>

    <!-- Bootstrap & JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
            
            // Form validation
            const contactForm = document.getElementById('contactForm');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('Pesan Anda telah terkirim. Kami akan menghubungi Anda segera!');
                    contactForm.reset();
                });
            }
            
            // Smooth scrolling untuk navigasi
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target && !this.getAttribute('data-bs-toggle')) {
                        e.preventDefault();
                        window.scrollTo({
                            top: target.offsetTop - 70,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Aktifkan tooltip
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
            
            // Aktifkan carousel
            const myCarousel = document.querySelector('#kostCarousel');
            if (myCarousel) {
                const carousel = new bootstrap.Carousel(myCarousel, {
                    interval: 3000,
                    wrap: true
                });
            }
            
            // Navbar active class
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            
            function onScroll() {
                const scrollPosition = window.scrollY + 100;
                
                sections.forEach(section => {
                    if (scrollPosition >= section.offsetTop && scrollPosition < (section.offsetTop + section.offsetHeight)) {
                        navLinks.forEach(link => {
                            link.classList.remove('active');
                            if (section.getAttribute('id') === link.getAttribute('href').substring(1)) {
                                link.classList.add('active');
                            }
                        });
                    }
                });
                
                // Tambahkan shadow ke navbar saat scroll
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('shadow');
                } else {
                    navbar.classList.remove('shadow');
                }
            }
            
            window.addEventListener('scroll', onScroll);
    </script>
</body>
</html>