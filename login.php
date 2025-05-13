<?php
session_start();
include 'inc/db.php';

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $user_type = $_POST['user_type']; // 'user' atau 'admin'

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        if ($user['role'] === $user_type) {
            $_SESSION['user'] = $user;
            if ($user_type === 'admin') {
                header("Location: admin/dashboard.php");
            } else {
                header("Location: user/user.php");
            }
            exit;
        } else {
            $error = "Akses ditolak: Anda bukan $user_type.";
        }
    } else {
        $error = "Email atau password salah.";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - KostKuIbu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS & Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #7FB3D5;
            --secondary-color: #D4E6F1;
            --accent-color: #2874A6;
            --text-color: #2C3E50;
        }
        body {
            background-color: var(--secondary-color);
            color: var(--text-color);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
        }
        .login-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 900px;
            overflow: hidden;
        }
        .login-image {
            background: url('asset/Berapa-Biaya-Sewa-Kamar-Kost.jpg') center/cover no-repeat;
            min-height: 300px;
        }
        .login-form {
            padding: 2rem;
        }
        .form-title {
            color: var(--accent-color);
            font-weight: 700;
        }
        .btn-primary {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
        }
        .btn-primary:hover {
            background-color: #1A5276;
            border-color: #1A5276;
        }
        .brand-logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--accent-color);
            text-decoration: none;
            margin-bottom: 1rem;
            display: inline-block;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="login-container">
        <div class="row g-0">
            <div class="col-md-6 login-image d-none d-md-block"></div>
            <div class="col-md-6">
                <div class="login-form">
                    <a href="index.php" class="brand-logo">Kost Putri<span class="text-primary"> Rajabasa</span></a>
                    <h2 class="form-title">Masuk ke Akun Anda</h2>

                    <?php if ($error): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>

                    <ul class="nav nav-tabs mb-4" id="loginTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="user-tab" data-bs-toggle="tab" data-bs-target="#user-tab-pane" type="button" role="tab">Penyewa</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="admin-tab" data-bs-toggle="tab" data-bs-target="#admin-tab-pane" type="button" role="tab">Admin</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="loginTabContent">
                        <!-- User Form -->
                        <div class="tab-pane fade show active" id="user-tab-pane" role="tabpanel">
                            <form method="POST" action="">
                                <input type="hidden" name="user_type" value="user">
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Masuk</button>
                            </form>
                        </div>

                        <!-- Admin Form -->
                        <div class="tab-pane fade" id="admin-tab-pane" role="tabpanel">
                            <form method="POST" action="">
                                <input type="hidden" name="user_type" value="admin">
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Masuk sebagai Admin</button>
                            </form>
                        </div>
                    </div>

                    <div class="text-center mt-3">
                        <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
