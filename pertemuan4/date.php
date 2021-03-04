<?php 

/*
Billy Firdaniel Nafitra
203040063
https://github.com/Bfirdaniel/pw2021_203040063
Pertemuan 4 - 3 maret 2021
Mempelajari Function
*/


// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date("l", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,8,25,1985));


// strtotime
echo date("l", strtotime("25 Aug 1985"));

?>