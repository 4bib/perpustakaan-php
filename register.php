<?php
    session_start();

    if(isset($_SESSION['email'])) {

        header("Location: index.php");
        exit;
    }

?>

<html lang="en">
<body>
    <h2>Register</h2>
     
    <!-- FORM -->
    <!-- form method POST -->
    <!-- ACTION: register_process.php -->
    <!-- action akan dijalankan setelah tombol submit diklik -->
    <form method="POST" action="./register_process.php">
        <label for="email">Email: </label><br>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password: </label><br>
        <input type="password" id="password" name="password"><br>

        <br>
        <button type="submit" value="register">REGISTER</button>
    </form>
</body>
</html>