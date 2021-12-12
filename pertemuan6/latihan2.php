<?php
// $mhs = [
// 	["lalu ibnu ", "19.11.3073", "Teknik Informatika", "ibnu@gmail.com"],
// 	["deri ", "19.11.000", "Teknik teletubie", "deri@gmail.com"],
// ];

// Array Associative
// key nya adalah string yang kita buat sendiri
$mhs = [
	[
		"nama" => "Lalu Ibnu",
		"nim" => "19.11.3073",
		"email" => "ibnu@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "1.jpg"
	],
	[
		"nama" => "Ibnu",
		"nim" => "19.11.0890",
		"email" => "ben@gmail.com",
		"jurusan" => "Teknik Komputer",
		"gambar" => "2.jpg"
	],
	[
		"nama" => "deri",
		"nim" => "19.11.3000",
		"email" => "deri@gmail.com",
		"jurusan" => "Teknik Teletubies",
		"gambar" => "3.jpg"
	],

];

// echo  $mhs[1]["tugas"][0];
// echo "<br>";

// foreach ($mhs as $valueMhs) :
// 	echo $valueMhs["jurusan"];
// 	echo "<br>";
// endforeach;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h1>Daftar Mahasiswa</h1>

	<ul>
		<?php foreach ($mhs as $valueMhs) : ?>
			<li>Nama : <?= $valueMhs["nama"] ?></li>
			<li>NIM : <?= $valueMhs["nim"] ?></li>
			<li>Email : <?= $valueMhs["email"] ?></li>
			<li>Jurusan : <?= $valueMhs["jurusan"] ?></li>
			<!-- <li>Jurusan : <?= $valueMhs["gambar"] ?></li> -->
			<img src="img/<?= $valueMhs["gambar"] ?>" width="100px">
			<br>
		<?php endforeach ?>
</body>

</html>