<?php
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
    <link rel="stylesheet" href="../css/style.css">
    <title>Tembakau Store</title>
</head>
<body>
<h2>Ubah Data Produk</h2>
<form action="" method="post">
    <input type="hidden" name="Id" value="<?= $rk['Id']; ?>">
   <div class="card-panel">
   <div class="input-field">
   <input type="text" name="Name" id="Name" required value="<?= $rk['Name']; ?>">
   <label for="Nama">Name</label>
   </div>
   <div class="input-field">
   <input type="text" name="Merk" id="Merk" required value="<?= $brg['Merk']; ?>">
   <label for="Deskripsi">Merk</label>
   </div>
   <div class="input-field">
   <input type="text" name="Price" id="Price" required value="<?= $brg['Price']; ?>">
   <label for="Size">Price</label>
   </div>
   <div class="input-field">
   <input type="text" name="Color" id="Color" required value="<?= $brg['Color']; ?>">
   <label for="Harga">Color</label>
   </div>
   <div class="input-field">
   <input type="text" name="Quantity" id="Quantity" required value="<?= $brg['Quantity']; ?>">
   <label for="Stok">Quantity</label>
   </div>
   <div class="input-field">
   <input type="text" name="Picture" id="Picture" required value="<?= $brg['Picture']; ?>">
   <label for="Gambar">Picture</label>
   </div>
   <button type="submit" name="ubah" class="waves-effect waves-light red lighten-2 btn small">Ubah Data!</button>
   <a href="../index.php" class="waves-effect waves-light red lighten-2 btn small">Kembali</a>
   </div>
   </form>
    </div>
</body>
</html>