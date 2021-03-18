<?php 

/*
Billy Firdaniel Nafitra
203040063
https://github.com/Bfirdaniel/pw2021_203040063
Mempelajari Array Associative PHP
*/

?>

<?php 

// $mahasiswa = [
//     ["Billy Firdaniel Nafitral", "203040063", "bfirdaniel@gmail.com", "Teknik Informatika"],
//     ["Billy Firdaniel Nafitra", "203040063", "bfirdaniel@gmail.com", "Teknik Informatika"],
// ];

/*
Array Associative
definisinya sama seerti array numerik
key-nya adalah strin yang kita buat sendiri
*/

$mahasiswa = [
    [
        "nama"    => "Billy Firdaniel Nafitra",
        "nrp"     => "203040063",
        "email"   => "bfirdaniel@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar"  => "11.jpg"
    ],
    [
        "nama"    => "Billy Firdaniel Nafitra",
        "nrp"     => "203040063",
        "email"   => "bfirdaniel@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar"  => "12.jpg"
    ],
];

//echo $mahasiswa[1]["tugas"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>