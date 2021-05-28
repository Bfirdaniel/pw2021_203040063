<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}


require 'functions.php';
$rokok = query("SELECT * FROM rokok");

if (isset($_POST["cari"]) ) {
  $rokok = cari($_POST["keyword"]);
} else {
  $rokok = query("SELECT * FROM rokok");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="../assets/img/favicon.ico">
    <title>Tembakau Store</title>
<style>
        body {
        background-image: url('../assets/img/l.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
        width: 99%;
        height: auto;
        top: 0;
        left: 0;
        text-align: center;
        font-family: serif;
        }

        img{
          width: 400px;
           height: 400px;
        }
        .add{
          width: 100px;
          height: 50px;
          padding-top: 20px;
          padding-bottom: 50px;
        }
        .logout{
          padding: 20px 0px 10px 0px;
          width: 100px;
        }
        button{
          width: 110px;
        }
        table{
          border-color: purple;
        }
</style>
</head>
<body>
  <h2>WELCOME TO TEMBAKAU STORE</h2>
    <div class="add">
        <a href="tambahan.php" style="color: white">Tambah Data</a>
        <br><br>

        <form action="" method="POST">
               <input type="text" name="keyword" size=25 placeholder="masukkan keyword.." autocomplete="off" autofocus>
               <button type="submit" name="cari">Cari</button>
        </form>
    </div>

      <table border="1" >
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
               
                    <tr>
                        <td><?= $i ?></td>
                        <td>
                        <a href="ubah.php?Id=<?= $rk["id"]; ?>" style="color: white">Ubah</a>
                        <a href="hapus.php?Id=<?= $rk["id"]; ?>" style="color: white" onclick = "return confirm ('Hapus Data?')">Hapus</a>
                        </td>
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
    
                <div class="logout">
                <button type="button" button class="btn btn-sceondary"><a href="logout.php" style="color: black">Logout</a></button>
                </div>
</body>
</html>