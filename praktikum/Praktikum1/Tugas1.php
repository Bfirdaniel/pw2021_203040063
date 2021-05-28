<?php
/*
Billy Firdaniel Nafitra
203040063
https://github.com/Bfirdaniel/pw2021_203040063
Praktikum Jum'at 10:00-11:00
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .salmon {
            background: salmon;
            margin: 1px;
            display: inline-block;
            border: 1px solid black;
        }
        .biru {
            background: lightblue;
            margin: 1px;
            display: inline-block;
            border: 1px solid black;
        }
    </style>
</head>
<body>

<table border="0" cellpadding="10" cellspacing="0">

<?php for($kolom = 1; $kolom <= 6; $kolom++) : ?>
    <tr>
        <?php for( $baris = 1; $baris <= 6; $baris++) : ?>
            <?php if (($kolom + $baris) %2 == 1) { ?>
                <td class="salmon"></td>
            <?php } else if (($kolom + $baris) %2 == 0 ) { ?>
                <td class="biru"></td>
            <?php } ?>
        <?php endfor; ?>
    
    </tr>
<?php endfor; ?>

</table> 

</body>
</html>