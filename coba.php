<?php
/*
Billy Firdaniel Nafitra
203040063
https://github.com/Bfirdaniel/pw2021_203040063
Pertemuan 2 - 12 Februari 2021
Mempelajari Sintaks PHP
*/

// Standar Output
// Echo, Print
// Print_r
// var_dump

// Penulisan Sintaks PHP
// 1. PHP dalam HTML
// 2. HTML dalam PHP

// Variable dan Tipe Data
// Variable
// tidak boleh diawali angka tapi boleh mengandung angka
$nama = "Billy Firdaniel Nafitra";

// Operator
// Aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;


// penggabung string / concat
// .
// $nama_depan = "Billy";
// $nama_belakang = "Firdaniel";
// echo $nama_depan . " " . $nama_belakang;


// assigment
// =, +=, -=, *=, /=, .=
// $x = 1;
// $x -= 5;
// echo $x;


// perbandingan
// <, >, <=, >=, ==
// var_dump(1 > 5);

// identitas
// ===, !==

// Logika
// %%, ||, !




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Nama saya <?php echo "Billy Firdaniel Nafitra"; ?></h1>
    <p> <?php echo "Nyoba aja"; ?><p>
    <!-- PHP dalam HTML -->

    <?php
    echo "<h1>Halo, Nama saya Billy Firdaniel Nafitra</h1>"
    // HTML dalam PHP
    ?>

    <h1>Halo, Nama saya <?php echo "$nama"; ?></h1>
    <!-- Variable -->

</body>
</html>