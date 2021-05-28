<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

    require 'functions.php';

    $Id = $_GET['Id'];
    $rk = query("SELECT * FROM rokok WHERE Id = $Id")[0];

    if (isset($_POST['ubah'])) {
        if (ubah($_POST) > 0) {
            echo "<script>
                        alert('Data Berhasil diubah!');
                        document.location.href = 'admin.php';
                    </script>";
        } else {
            echo "<script>
            alert('Data Gagal diubah!');
            document.location.href = 'admin.php';
            </script>";
        }
    }
?>

<<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../assets/img/favicon.ico">
    <title>Tembakau Store</title>
</head>

<style>
    body{
        width: 50%;
    }

.card-panel{
    width: 50%;
}
</style>

<body>
<h2>Ubah Data Produk</h2>
<form action="" method="post">
    <input type="hidden" name="Id" value="<?= $rk['id']; ?>">
    

   <div class="card-panel">
   <div class="input-field">
   <input type="text" name="Name" id="Nama" required value="<?= $rk['nama']; ?>">
   <label for="nama">Name</label>
   </div>

   <div class="input-field">
   <input type="text" name="Merk" id="Merk" required value="<?= $rk['merk']; ?>">
   <label for="merk">Merk</label>
   </div>

   <div class="input-field">
   <input type="text" name="Price" id="Price" required value="<?= $rk['price']; ?>">
   <label for="price">Price</label>
   </div>

   <div class="input-field">
   <input type="text" name="Color" id="Color" required value="<?= $rk['color']; ?>">
   <label for="color">Color</label>
   </div>

   <div class="input-field">
   <input type="text" name="Quantity" id="Quantity" required value="<?= $rk['quantity']; ?>">
   <label for="quantity">Quantity</label>
   </div>

   <div class="input-field">
   <input type="text" name="Picture" id="Picture" required value="<?= $rk['picture']; ?>">
   <label for="picture"></label>
   </div>

   <button type="submit" name="ubah" class="waves-effect waves-light red lighten-2 btn small">Ubah Data!</button>
   <a href="../index.php" class="waves-effect waves-light red lighten-2 btn small">Kembali</a>
   </div>
   </form>
    </div>
</body>
</html>