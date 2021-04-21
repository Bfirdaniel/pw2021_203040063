<?php 
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

$rk = query("SELECT * FROM rokok WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail <?= $rk["Rokok"]; ?></title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="container">
        <div class="pictures">
            <img src ="../assets/img/<?= $rk["picture"]; ?>" alt="">
                    <div class="ket">
                        <p><?= $rk["nama"] ?></p>
                        <p><?= $rk["merk"] ?></p>
                        <p><?= $rk["price"] ?></p>
                        <p><?= $rk["color"] ?></p>
                        <p><?= $rk["quantity"] ?></p>
                    </div>

                    <button class="kembali"><a href="../index.php">Kembali</a></button>
        </div>            
    </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>