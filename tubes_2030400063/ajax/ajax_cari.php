<?php 
require '../php/functions.php';
$rokok = query ("SELECT * FROM rokok");
if (isset($_GET["cari"])) {
  $query = mysqli_query ($conn, "SELECT * FROM rokok WHERE nama LIKE '%$keyword%' ")
  $_GET['cari']. "%$keyword%'";
}

?>
<table border="1" cellpadding="13" cellspacing="0">
      <tr>
      <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Price</th>
                    <th scope="col">Color</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Opsi</th>
      </tr>

      <?php if(empty($rokok)) : ?>
        <tr>
          <td colspan="4">
            <p>Data tidak ditemukan!!</p>
          </td>
        </tr>
      <?php endif; ?>
        <?php $i = 1; ?>
        <?php foreach ($rokok as $rk) : ?>
          <tr>
            <td><?=$i; ?></td>
            <td><img src="../assets/img/<?=$rk["img"]; ?>" ></td>
            <td><?=$rk["nama"]; ?></td>
            <td>
              <a href="php/detail.php?id=<?= $rk['id']; ?>">Lihat Detail</a>
            </td>
          </tr>
          <?php $i++; ?>

        <?php endforeach; ?>
    </table>