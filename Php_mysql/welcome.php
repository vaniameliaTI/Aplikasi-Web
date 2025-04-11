<?php
// Mulai sesi
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['email'])) {
    // Jika belum login, arahkan ke halaman login
    header("Location: login.php");
    exit();
}

// Ambil email pengguna yang login dari sesi
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="welcome-box">
        <h1>Welcome, <?php echo htmlspecialchars($email); ?>!</h1>
        <p>You have successfully logged in.</p>

        <a href="logout.php" class="logout-button">Logout</a> <!-- Tombol logout -->
    </div>
</body>
</html>
