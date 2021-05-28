<?php
/*
Billy Firdaniel Nafitra
203040063
https://github.com/Bfirdaniel/pw2021_203040063
Praktikum Jum'at 10:00-11:00
*/
?>



<?php

function hitungDeterminan($a, $b, $c, $d)
{
    // Tampilan matriksnya
    echo "
        <table cellpadding='5' cellspacing='5'>
            <tr>
                <td>$a</td>
                <td>$b</td>
            </tr>
            <tr>
                <td>$c</td>
                <td>$d</td>
            </tr>
        </table>
    ";

    // Hitung determinanya
    echo "<br>";
    echo "<b>Determinan dari matriks tersebut adalah " . (($a * $d) - ($b * $c)) . "</b>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 D</title>

    <style>
        table {
            border-left: 2px solid black;
            border-right: 2px solid black;
        }
    </style>
</head>

<body>

    <?= hitungDeterminan(1, 2, 3, 4); ?>

</body>

</html>