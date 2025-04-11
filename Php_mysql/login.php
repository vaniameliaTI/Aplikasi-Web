<?php
session_start();
include "koneksi.php";

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']); // kalau masih pakai md5

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email' AND password='$password'");

    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_array($query);
        $_SESSION['user'] = $data;
        echo "<script>alert('Selamat Datang'); window.location='dashboard.php';</script>";
    } else {
        echo "<script>alert('Email/password tidak sesuai.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Aksi Relawan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="login.php" method="POST">
        <div class="login-box">
            <div class="login-header">
                <img src="Aksi Relawan (8).png" alt="Logo Relawan" class="logo">
                <header>Login Aksi Relawan</header>
            </div>
            <div class="input-box">
                <input type="text" name="email" class="input-field" placeholder="Email" autocomplete="off" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" class="input-field" placeholder="Password" autocomplete="off" required>
            </div>
            <div class="forgot">
                <div class="remember">
                    <input type="checkbox" id="check">
                    <label for="check">Remember me</label>
                </div>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" class="login-button">Login</button>
            <div class="input-submit">
                <p>Don't have an account? <a href="#">Sign up</a></p>
            </div>
        </div>
    </form>
</body>

