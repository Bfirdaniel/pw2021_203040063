<?php
/*
Billy Firdaniel Nafitra
203040063
https://github.com/Bfirdaniel/pw2021_203040063
Pertemuan 3 - 22 Februari 2021
Mempelajari Struktur Kendali
*/

//for
//while
//do.... while
//foreach

//for( $i = 0; $i < 5; $i++ ) {
//    echo "Hello World! <br>";
//}

//$i = 0;
//while( $i < 5) {
//    echo "Hello World! <br>";
//$i++;    
//}

//$i = 0;

//do {
//    echo "Hello World! <br>";
//$i++;
//} while( $i < 5 );

//for
     //for( $i = 1; $i <= 3; $i++ ) {
     //    echo "<tr>";
     //    for( $j = 1; $j <= 5; $j++ ) {
     //        echo "<td>$i,$j</td>";

     //    }
     //  echo "</tr>";
     //}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
     .warna-baris {
         background-color: silver;
     }
    </style>
</head>
<body>
    
<table border="1" celladding="10" cellspacing="0">
     <?php for( $i = 1; $i <= 5; $i++ ) :  ?>
     <?php if( $i % 2 == 0) : ?>
     <tr class="warna-baris">
     <?php else : ?>
        <tr>
    <?php endif; ?>
       <?php for( $j = 1; $j <= 5; $j++) : ?>
         <td><?php echo "$i, $j"; ?></td>
       <?php endfor; ?>
     </tr>
     <?php endfor; ?>

</table>


</body>
</html>