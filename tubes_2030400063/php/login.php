<?php
session_start();
require 'functions.php';

if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}

if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);

                        if (isset($_POST['remember'])) {
                            setcookie('username', $row['username'], time() + 60 * 60 * 24);
                            $hash = hash('sha256', $row['id']);
                            setcookie('hash', $hash, time() + 60 * 60 * 24);
                        }

        if (hash('sha256', $row['id']) == $_SESSION['hash']) {
            header("Location: admin.php");
            die;
        }
        header("Location: ../index.php");
        die;
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="../assets/img/favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"
    <title>Tembakau Store</title>
    <style> 
        body {
            background-image: url('../assets/img/jk.jpg');
            background-repeat: no-repeat;
            background-size: 1300px 800px;
            color: white;
        }
        h3 {
            text-align: center;
            font-size: 50pt;
        }
        .card-panel{
            width: 200px;
        }
        .container{
        margin: 50px auto;
        width: 400px;
        padding: 10px;
        border: 1px solid #ccc;
        }
    </style>
</head>
<body>
<h3>Tembakau Store</h3>
    <div class="container">

    <form action="" method="post">
        <?php if(isset($error)) : ?>
            <p style="color: red; font-style: italic;">Username atau password salah</p>
        <?php endif; ?>
        <div class="card-panel">
            <tr>
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
            </div>
    <div class="remember">
        <label>
            <label for="remember"></label>
            <input type="checkbox" name="remember">
            <span>Remember Me</span>
        </label>
        <br><br>
    </div>
    <button type="submit" name="submit" class="waves-effect waves-light btn-small blue darken-2">Login</button>
    </form>
    <div class="registrasi">
    <p>Belum punya akun? REGISTRASI <a href="registrasi.php" style="color: 	#DEB887">Disini</a></p>
    </div>
</body>
</html>