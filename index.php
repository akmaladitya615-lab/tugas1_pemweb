<?php
session_start();

/**
 * 1. KONEKSI DATABASE
 */
include_once 'db_config.php'; 

// Cek halaman yang diminta, default ke 'home'
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Validasi halaman agar tidak sembarang file bisa di-include
$allowed_pages = ['home', 'about', 'contact', 'studies', 'skills', 'level', 'login'];
if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}

/**
 * 2. PERBAIKAN LOGIKA AUTENTIKASI
 * Kita gunakan 'login' sebagai kunci utama session agar sinkron dengan proses_login.php
 */
$crud_pages = ['level', 'studies'];
if (in_array($page, $crud_pages)) {
    // Jika tidak ada session login, paksa ke halaman login
    if (!isset($_SESSION['login'])) {
        header("Location: index.php?page=login");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AKMAL.DEV - Informatics Student</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        .hero-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("hero-bg.jpg") !important;
            background-size: cover !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            padding: 120px 0;
            color: white;
            text-align: center;
        }
        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 800;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .profile-card-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #fff;
        }
    </style>
</head>
<body class="bg-light">

    <?php if ($page != 'login') : ?>
        <?php include_once 'pages/header.php'; ?>
        <?php include_once 'pages/menu.php'; ?>
    <?php endif; ?>

    <div class="container my-5">
        <div class="row">
            <?php if ($page != 'login') : ?>
                <aside class="col-md-3 mb-4">
                    <?php include_once 'pages/sidebar.php'; ?>
                </aside>
                <main class="col-md-9">
            <?php else : ?>
                <main class="col-12">
            <?php endif; ?>

                <?php 
                $file_path = 'pages/' . $page . '.php';
                if (file_exists($file_path)) {
                    include_once $file_path;
                } else {
                    echo "
                    <div class='alert alert-danger shadow-sm'>
                        <i class='fas fa-exclamation-triangle me-2'></i>
                        <strong>Error 404:</strong> Halaman '<b>$page</b>' tidak ditemukan.
                    </div>";
                }
                ?>
            </main>
        </div>
    </div>

    <?php if ($page != 'login') include_once 'pages/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>