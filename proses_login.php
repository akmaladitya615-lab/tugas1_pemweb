<?php
session_start();
include "db_config.php";

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");

    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
        
        // PENTING: Nama session harus konsisten
        $_SESSION['login'] = true; 
        $_SESSION['username'] = $data['username'];
        
        header("Location: index.php?page=home");
    } else {
        $_SESSION['login_error'] = "Username atau password salah.";
        header("Location: index.php?page=login");
    }
    exit();
    }
?>