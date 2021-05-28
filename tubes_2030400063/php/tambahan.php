<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
    require 'functions.php';


    if (isset($_POST['tambah'])) {
        if (tambah($_POST) > 0) {
            echo "<script>
                        alert('Data Berhasil ditambahkan!');
                        document.location.href = 'admin.php';
                    </script>";
        } else {
            echo "<script>
            alert('Data Gagal ditambahkan!');
            document.location.href = 'admin.php';
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="../assets/img/favicon.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <title>Tembakau Store</title>

    <style>
    h2{
        padding-top: 100px;
        padding-bottom: 20px;
    }
    .container{
    text-align: center;
    }
    .card{
        text-align: center;
    }
    .card-body{
        background-image: url('../assets/img/rty.jpg');
        background-repeat: no-repeat;
        background-size: 1300px 500px;
        color: #FFFAF0;
    }
    </style>

</head>
<body>
<div class="card">
  <h4 class="card-header">TEMABAKAU STORE</h4>
<div class="card-body">
    <div class="container">
        <h2>Tambah Stok Rokok  ⇊ </h2>
        <form action="" method="post" encytpe="multipart/form-data" >
<div class="container">
    <div class="card-panel">
        <div class="input-field">
            <input type="text" name="Name" id="Name" required class="validate">
            <label for="Nama">Name</label>
        </div>
        <div class="input-field">
            <input type="text" name="Opsi" id="Opsi" required class="validate">
            <label for="merk">Opsi</label>
        </div>
        <div class="input-field">
            <input type="text" name="Price" id="price" required class="validate">
            <label for="price">  Price</label>
        </div>
        <div class="input-field">
            <input type="text" name="color" id="color" required class="validate">
            <label for="color">Color</label>
        </div>
        <div class="input-field">
            <input type="text" name="quantity" id="quantity" required class="validate">
            <label for="quantity">Quantity</label>
        </div>
        <div class="input-field">
            <input type="file" name="picture" id="picture" required class="validate">
            <label for="picture"></label>
        </div>
        <br><br>
        <button type="submit" name="tambah" class="waves-effect waves-light red lighten-2 btn small">Tambahkan Data!</button>
        <a href="../index.php" class="waves-effect waves-light red lighten-2 btn small" style ="color: white">Kembali</a>
   </div>
</div>
</div>
</div>
</body>
</html>