<?php
include "db_config.php";

$username = 'admin';
$password_plain = 'admin123';
// Menghasilkan hash yang dikenal oleh PHP password_verify
$password_hashed = password_hash($password_plain, PASSWORD_DEFAULT);

// Hapus user lama jika ada untuk menghindari duplikat
mysqli_query($conn, "DELETE FROM users WHERE username = '$username'");

// Masukkan user baru dengan hash yang fresh
$query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password_hashed', 'admin')";

if (mysqli_query($conn, $query)) {
    echo "<h1>Sukses!</h1>";
    echo "User <b>admin</b> telah diperbarui dengan password <b>admin123</b>.<br>";
    echo "Silakan <a href='index.php?page=login'>Login di sini</a>.";
} else {
    echo "Gagal memperbarui database: " . mysqli_error($conn);
}
?>