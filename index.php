<?php
    session_start();

    if (!isset($_SESSION['email'])) {

        header('location: login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<h1 class="header">APLIKASI PERPUSTAKAAN ONLINE</h1>
        <form action="./list_buku.php">
            <button class="btn">Lihat Daftar buku</button>
        </form>
        <br>
        <form action="./list_staff.php">
            <button class="btn">Lihat Daftar staff</button>
        </form>
        <br>
        <form action="./logout_proccess.php" method="POST">
            <button type="submit">LOGOUT</button>
        </form>
</body>
</html>