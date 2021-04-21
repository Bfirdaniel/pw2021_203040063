<?php
require 'functions.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('Registrasi Berhasil');
                document.location.href='login.php';
                </script>";
    } else {
        echo "<script>
                alert('Registrasi Gagal');
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" href="css/style.css">
    <title>Tembakau Store</title>
    <style> 
        body {
            background-color: grey;
            color: azure;
        }
        h3 {
            text-align: center;
        }
        .card-panel{
            width: 200px;
        }
    </style>
</head>
<body>
<h3>Registrasi Tembakau Store</h3>
    <div class="container">

    <form action="" method="post">
    <div class="card-panel ">
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
        <button type="submit" name=" register">REGISTER</button>
    </form>
    </div>
</body>
</html>