<?php 

require 'php/functions.php';
$rokok = query("SELECT * FROM rokok")

?>
<!DOCTYPE html>
<html lang>

<head>
    <title>Tembakau store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <style>
    picture {
    display: block;
    max-width: 100%;
    height: 128px;
    width: 128px;
    margin: auto;
    }
    </style>
</head>

<body>
    <div class="container mb-3 mt-3">
        <table class="table table-bordered">
            <thead class="thead-light">
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
                    <td><a href="php/detail.php?id=<?= $rk["id"]; ?>">Keterangan</td>
                    <td><a href="php/admin.php?id=<?= $rk["id"]; ?>">Klik!</td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
        <tbody>
    </div>
</body>