<?php
    session_start();

    if(isset($_SESSION['email'])) {

        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <h2>Login Admin</h2>
     
    <!-- FORM -->
    <!-- form method POST -->
    <!-- ACTION: login_process.php -->
    <!-- action akan dijalankan setelah tombol submit diklik -->
    <form method="POST" action="./login_process.php">
        <label for="email">Email: </label><br>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password: </label><br>
        <input type="password" id="password" name="password"><br>

        <br>
        <button type="submit" value="login">LOGIN</button>
    </form>
</body>
</html>