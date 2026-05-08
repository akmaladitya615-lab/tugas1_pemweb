<?php
$host = 'localhost:3307';
$user = 'root';
$password = '';
$db_name = 'db_portofolio';

try {
    // Baris ke-7 yang diperbaiki dengan penanganan exception
    $conn = mysqli_connect($host, $user, $password, $db_name);
    
    if (!$conn) {
        throw new Exception("Koneksi gagal: " . mysqli_connect_error());
    }
} catch (mysqli_sql_exception $e) {
    // Menampilkan pesan yang lebih ramah jika MySQL mati
    die("<div style='color:red; border:1px solid red; padding:10px;'>
            <strong>Database Error:</strong> Pastikan MySQL di XAMPP sudah dinyalakan (Running).<br>
            Detail: " . $e->getMessage() . "
         </div>");
}
?>