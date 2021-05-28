<?php 

/*
Billy Firdaniel Nafitra
203040063
https://github.com/Bfirdaniel/pw2021_203040063
Mempelajari Array Associative PHP
*/

?>

<?php 
$pemainBola= [
    "Christiano Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca Modric" => "Real Madrid",
    "Mohammad Salah" => "LiverPool",
    "Neymar Jr" => "Paris Saint German",
    "Sadio Mane" => "LiverPool",
    "Zlatan Ibrahimovic" => "Ac Milan"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan3c_203040048</title>

<style>
    .tabel {
        border: 2px solid;
        width: 50%;
        padding: 5px;
        text-align: left;
        font-family: Arial, Helvetica, sans-serif;

    }
</style>
</head>

<body>
    <div class="tabel">
    <p><b>Daftar pemain bola terkenal dan clubnya</b></p> 
    <table>
        <?php foreach($pemainBola as $pb => $club): ?>
            <tr>
                <td><b><?= $pb; ?></b></td>
                <td> : </td>
                <td><?= $club;?></td>
            </tr>
            <?php endforeach; ?>
    </table>
    </div>
</body>
</html>