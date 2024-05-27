<?php
    // memulai interaksi session
    session_start();

    // mengambil koneksi php dari file connect.php
    include_once("./connect.php");

    // isset("apakah ada?")
    // apakah ada request post email dan password yang dikirim?
    // note: dikirim dari form

    if(isset($_POST['email']) && isset($_POST['password'])) {
        
        $email = $_POST['email'];

        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "Email Sudah Terdaftar";
        } else {
            $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

            if (mysqli_query($db, $sql)) {
                echo "Registrasi berhasil, silahkan <a href='login.php'>login</a>";
            } else {
                echo "Registrasi Gagal";
            }
        }
    }