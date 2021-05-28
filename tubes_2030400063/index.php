<?php 

require 'php/functions.php';
$rokok = query("SELECT * FROM rokok")

?>
<!DOCTYPE html>
<html lang>

<head>
<link rel="shortcut icon" href="assets/img/favicon.ico">
    <title>Tembakau store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <style>
        body {
        width: 300px;
        background-image: url(assets/img/e.jpg);
        width: 100%;
        height: auto;
        top: 0;
        left: 0;
        padding: 1px;
        text-align: center;
        }

        h2{
            text-align: center;
            font-family: impact;
            color: white;
        }

        .table {
        border: 1px solid black;
        margin: auto;
        padding: 10px;
        color: white;
        }

        img{
            width: 400px;
            height: 400px;
        }

        button{
        width: 1250px;
        padding: 10px;
        }


    </style>
</head>

<body>
<h2>TEMBAKAU STORE</h2>
<a href="php/login.php" style="color: white">Login Halaman Admin</a>
<br><br>

        <table class="table">
            <thead>
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
            </thead>
            <?php $i = 1; ?>
            <?php foreach($rokok as $rk) : ?>
                <tr>
                    <td><b><?= $i ?> </b></td>
                    <td><b><?= $rk["nama"]; ?></b></td>
                    <td><b><?= $rk["merk"]; ?></b></td>
                    <td><b><?= $rk["price"]; ?></b></td>
                    <td><b><?= $rk["color"]; ?></b></td>
                    <td><b><?= $rk["quantity"]; ?></b></td>
                    <td><img src="assets/img/<?= $rk["picture"]; ?>"></td>
                    <td><a href="php/detail.php?id=<?= $rk["id"]; ?>" style="color: white">Pilih</td>
                    <td><a href="php/admin.php?id=<?= $rk["id"]; ?>" style="color: 	white">Klik!</td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
</body>