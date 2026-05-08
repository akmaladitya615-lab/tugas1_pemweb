<?php
// pages/change_password.php

if (isset($_POST['update_password'])) {
    $password_lama = $_POST['old_pass'];
    $password_baru = $_POST['new_pass'];
    $username = $_SESSION['username']; // Ambil username dari session login

    // 1. Cek apakah password lama benar
    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password_lama'");
    
    if (mysqli_num_rows($query) > 0) {
        // 2. Jika benar, update ke password baru
        $update = mysqli_query($conn, "UPDATE users SET password='$password_baru' WHERE username='$username'");
        
        if ($update) {
            echo "<script>alert('Password berhasil diganti!'); window.location.href='index.php?page=home';</script>";
        }
    } else {
        echo "<script>alert('Password lama salah!');</script>";
    }
}
?>

<div class="card shadow-sm border-0 rounded-4 p-4" style="max-width: 400px; margin: auto;">
    <h5 class="fw-bold mb-4">Ganti Password</h5>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Password Lama</label>
            <input type="password" name="old_pass" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password Baru</label>
            <input type="password" name="new_pass" class="form-control" required>
        </div>
        <button type="submit" name="update_password" class="btn btn-dark w-100 rounded-3">Update Password</button>
    </form>
</div>