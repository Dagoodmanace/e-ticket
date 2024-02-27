<?php


require 'functions.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style/style.css">
</head>
<body>

    <div class="navbar">
        <div class="logo">E-Ticketing</div>
        <div class="menu">
            <a href="">Beranda</a>
            <a href="">Jadwal Penerbangan</a>
            <a href="">Pemesanan Tiket</a>
            <a href="">Riwayat Pemesanan</a>
        </div>
        <div class="authentication">
            <?php if(isset($_SESSION["username"])) {
                ?>
                <a href="#">Halo, <?= $_SESSION["nama_lengkap"]; ?></a>
                <a href="logout.php">Logout.php</a>
                <?php
            }else{
                ?>
                <a href="auth/login">Login</a>
                <a href="auth/register">Register</a>
                <?php
            } ?>
        </div>
    </div>

</body>
</html>