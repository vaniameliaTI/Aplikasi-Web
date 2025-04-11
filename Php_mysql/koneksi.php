<?php
$koneksi = mysqli_connect("localhost", "root", "", "relawan_app", 3307);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
