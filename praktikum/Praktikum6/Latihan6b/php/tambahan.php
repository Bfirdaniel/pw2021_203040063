<?php
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
        <link rel="stylesheet" href="../css/style.css">
    <title>Tembakau Store</title>
</head>
<body>
    <div class="container">
<h2>Tambah Stok Rokok  →  </h2>
<form action="" method="post">
   <div class="card-panel">
   <div class="input-field">
   <input type="text" name="Name" id="Name" required class="validate">
   <label for="Nama">Name</label>
   </div>
   <div class="input-field">
   <input type="text" name="Opsi" id="Opsi" required class="validate">
   <label for="Deskripsi">Opsi</label>
   </div>
   <div class="input-field">
   <input type="text" name="Price" id="price" required class="validate">
   <label for="Size">Price</label>
   </div>
   <div class="input-field">
   <input type="text" name="color" id="color" required class="validate">
   <label for="Harga">Color</label>
   </div>
   <div class="input-field">
   <input type="text" name="quantity" id="quantity" required class="validate">
   <label for="Stok">Quantity</label>
   </div>
   <div class="input-field">
   <input type="text" name="picture" id="picture" required class="validate">
   <label for="Gambar">Picture</label>
   </div>
   <button type="submit" name="tambah" class="waves-effect waves-light red lighten-2 btn small">Tambahkan Data!</button>
   <a href="../index.php" class="waves-effect waves-light red lighten-2 btn small">Kembali</a>
   </div>
   </form>
    </div>
</body>
</html>