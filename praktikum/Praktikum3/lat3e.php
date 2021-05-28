<?php 
$jam = [
    [
        "nama" => "SAMPOERNA MILD",
        "merk" => "SAMPOERNA",
        "harga" => "Rp.26.000",
        "color" => "WHITE",
        "quantity" => "3 slop",
        "gambar" => "1a.jpg"
    ],
    [
        "nama" => "MARLBORO FILTER",
        "merk" => "Philip Morris International",
        "harga" => "Rp. 30.000",
        "color" => "RED AND WHITE",
        "quantity" => "2 slop",
        "gambar" => "2.jpg"
    ],
    [
        "nama" => "GUDANG GARAM FILTER",
        "merk" => "GUDANG GARAM",
        "harga" => "Rp.20.000",
        "color" => "MAROON AND BROWN",
        "quantity" => "2 slop",
        "gambar" => "12a.jpg"
    ],
    [
        "nama" => "MAGNUM MILD",
        "merk" => "DJI SAMSOE 234",
        "harga" => "Rp.21.000",
        "color" => "BLUE",
        "quantity" => "4 slop",
        "gambar" => "4.jpg"
    ],
    [
        "nama" => "ESSE change grape edition",
        "merk" => "Korea Tomorrow & Global Corporation",
        "harga" => "Rp.27.000",
        "color" => "PURPLE",
        "quantity" => "5 slop",
        "gambar" => "5b.jpg"
    ],
    [
        "nama" => "MAGNUM FILTER",
        "merk" => "DJI SAMSOE 234",
        "harga" => "Rp.20.000",
        "color" => "BLACK",
        "quantity" => "1 slop",
        "gambar" => "13a.jpg"
    ],
    [
        "nama" => "GUDANG GARAM PATRA ",
        "merk" => "GUDANG GARAM",
        "harga" => "Rp.11.000",
        "color" => "BROWN",
        "quantity" => "1 slop",
        "gambar" => "7a.jpg"
    ],
    [
        "nama" => "CLAS MILD",
        "merk" => "Nojorono Tobacco International",
        "harga" => "Rp.22.000",
        "color" => "BLUE AND WHITE",
        "quantity" => "2 slop",
        "gambar" => "8.jpg"
    ],
    [
        "nama" => "U-MILD",
        "merk" => "SAMPOERNA",
        "harga" => "Rp.21.000",
        "color" => " BLUE AND WHITE",
        "quantity" => "1 slop",
        "gambar" => "9.jpg"
    ],
    [
        "nama" => "DJARUM COKLAT KRETEK",
        "merk" => "DJARUM",
        "harga" => "Rp.13.000",
        "color" => "BROWN",
        "quantity" => "2 sLOP",
        "gambar" => "10.jpg"
    ],
];
?>
<!DOCTYPE html>
<html lang>

<head>
    <title>Latihan3e_203040048</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mb-3 mt-3">
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Name</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Price</th>
                    <th scope="col">Color</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <?php $i = 1; ?>
            <?php foreach ($jam as $jm) : ?>
                <tr>
                    <td><b><?= $i ?> </b></td>
                    <td><img src="img/<?= $jm["gambar"]; ?>"></td>
                    <td><b><?= $jm["nama"]; ?></b></td>
                    <td><b><?= $jm["merk"]; ?></b></td>
                    <td><b><?= $jm["harga"]; ?></b></td>
                    <td><b><?= $jm["color"]; ?></b></td>
                    <td><b><?= $jm["quantity"]; ?></b></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
            </tr>
        </table>
        <tbody>
    </div>
</body>