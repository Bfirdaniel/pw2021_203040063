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
<link rel="shortcut icon" href="../assets/img/favicon.ico">
    <title>Tembakau Store</title>
    <style> 
        body {
            background-image: url('../assets/img/lll.jpg');
            background-repeat: no-repeat;
            background-size: 1300px 800px;
            color: white;

        }
        h3 {
            text-align: center;
            font-size: 40pt;
            color: black;
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
        button{
            color: black;
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