<?php

require 'functions.php';
$rokok = query("SELECT * FROM rokok");

if (isset($_GET["cari"]) ) {
  $rokok = cari($_GET["keyword"]);
} else {
  $rokok = query("SELECT * FROM rokok");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Tembakau Store</title>
</head>
<body>

    <div class="add">
        <a href="tambahan.php" class="waves-effect waves-light teal btn-small">Tambah Data</a>
        <form action="" method="GET">
               <input type="text" name="keyword" autofocus placeholder="masukkan keyword.." autocomplete="off">
               <button type="submit" name="cari">Search</button>
            </form>
    </div>

      <table border="1" cellpadding="15" cellspacing="0">
          <tr>
            <th>no</th>
            <th>opsi</th>
            <th>Nama</th>
            <th>Merk</th>
            <th>Price</th>
            <th>Color</th>
            <th>Quantity</th>
            <th>Picture</th>
          </tr>
                <?php $i = 1 ?>
                <?php foreach ($rokok as $rk) : ?>
                <td><?=$i; ?></td>
                <td>
                  <a href="ubah.php?Id=<? $rk['Id']; ?>">Ubah</a>
                  <a href="hapus.php?Id=<? $rk['Id']; ?>" onclick= "return confirm ('Hapus Data?')">Hapus</a>
                </td>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $rk["Opsi"]; ?></td>
                        <td><?= $rk["nama"]; ?></td>
                        <td><?= $rk["merk"]; ?></td>
                        <td><?= $rk["price"]; ?></td>
                        <td><?= $rk["color"]; ?></td>
                        <td><?= $rk["quantity"]; ?></td>
                        <td><img src="../assets/img/<?= $rk["picture"]; ?>" alt=""></td>

                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
       </table>
</body>
</html>