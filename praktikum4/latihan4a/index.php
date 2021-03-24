<?php

$connect = mysqli_connect("localhost", "root", "");
mysqli_select_db($connect, "pw_tubes_203040063");
$result = mysqli_query($connect, "SELECT * FROM rokok");

?>

<!DOCTYPE html>
<html lang>

<head>
    <title>Tembakau store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <style>
     img {
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
                </tr>
            </thead>
            <?php $i = 1 ?>
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><b><?= $i ?> </b></td>
                    <td><b><?= $row["nama"]; ?></b></td>
                    <td><b><?= $row["merk"]; ?></b></td>
                    <td><b><?= $row["price"]; ?></b></td>
                    <td><b><?= $row["color"]; ?></b></td>
                    <td><b><?= $row["quantity"]; ?></b></td>
                    <td><img src="assets/img/<?= $row["picture"]; ?>"></td>
                </tr>
                <?php $i++; ?>
            <?php endwhile; ?>
        </table>
        <tbody>
    </div>
</body>