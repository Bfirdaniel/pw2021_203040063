<?php

require 'functions.php';
$rokok = query("SELECT * FROM rokok");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Tembakau Store</title>
</head>
<body>
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
                    <a href="">Ubah</a>
                    <a href="">Hapus</a>
                </td>
                    <tr>
                        <td><?= $i ?></td>
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