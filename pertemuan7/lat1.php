<?php 
// $_GET
$mahasiswa = [
	[	
		"nrp" => "203040063",
		"nama" => "Billy Firdaniel",
		"email" => "bfirdaniel@gmail.com",
		"jurusan" => "Teknik Informatika",
	],
	[
		"nama" => "Acong", 
		"nrp" => "203040111",
		"email" => "bfirdaniel@gmail.com",
		"jurusan" => "Teknik Industri",
	]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="lat2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>