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
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th></th>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <th>Kolom <?= $i; ?></th>
            <?php endfor; ?>
        </tr>
                
        <?php for($i = 1; $i <= 5; $i++) : ?>
            <tr>
                <th>Baris <?=$i; ?></th>
                <?php for($b = 1; $b <= 5; $b++) : ?>
                    <td><?= "Baris $i, Kolom $b"; ?></td?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>