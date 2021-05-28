<?php 
$mahasiswa = [
	["Billy Firdaniel", "203040063", "Teknik Informatika", "bfirdaniel@gmail.com"],
	["Fajar N", "203040055", "Teknik Industri", "fajarn1@yahoo.com"],
	["203040060", "Farhat", "Teknik Pangan", "farhat2020@gmail.com"]
];

/*
Billy Firdaniel Nafitra
203040063
https://github.com/Bfirdaniel/pw2021_203040063
*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
	<li>Nama : <?= $mhs[0]; ?></li>
	<li>NRP : <?= $mhs[1]; ?></li>
	<li>Jurusan : <?= $mhs[2]; ?></li>
	<li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>





</body>
</html>