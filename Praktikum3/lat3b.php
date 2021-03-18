<?php 

/*
Billy Firdaniel Nafitra
203040063
https://github.com/Bfirdaniel/pw2021_203040063
Mempelajari Array Associative PHP
*/

?>V

<?php 
$pemainBola = [
    "Mohammad Salah",
    "Cristiano Ronaldo",
    "Lionel Messi",
    "Zlatan Ibrahimovic",
    "Neymar Jr"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3b_203040048</title>
</head>
<style>
    .tabel {
        border: 2px solid;
        width: 55%;
        padding: 5px;
        text-align: left;
        font-family: Arial, Helvetica, sans-serif;

    }
</style>
<body>
    <div class="tabel">
    <p><b> Daftar pemain bola terkenal</b></p>
    <ol>
        <?php foreach($pemainBola as $pl) : ?>
            <li><?= $pl ?></li>
        <?php endforeach; ?>
    </ol>

    <?php
    // Menambahkan elemen baru pada array sebelumnya
    array_push($pemainBola,"Luca Modric","Sadio Mane");
    // Urutkan sesuai abjad
    sort($pemainBola);
    ?>

    <p><b>Daftar pemain bola terkenal baru</b></p>
    <ol>
        <?php foreach($pemainBola as $pb) : ?>
            <li><?= $pb ?></li>
        <?php endforeach; ?>
    </ol>
    </div>
</body>
</html>