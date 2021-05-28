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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 A</title>
    <style>
        .style1 {
            border: 2px solid black;
            width: 50%;
            margin: 0 auto;
            border-radius: 5px;
            box-shadow: 0 0 20px #888888;
        }

        .style2 {
            font-size: 28px;
            font-family: arial;
            color: #8c782d;
            font-style: italic;
            font-weight: bolder;
            margin-left: 15px;
        }
    </style>
</head>

<body>

    <?php

    function gantiStyle($tulisan, $style1 = "style1", $style2 = "style2")
    {
        return "<div class=$style1><p class=$style2>$tulisan</p></div>";
    }

    echo gantiStyle("Selamat Datang di Praktikum PW");

    ?>

</body>

</html>