<?php
$mhs = [
	["lalu ibnu ", "19.11.3073", "Teknik Informatika", "ibnu@gmail.com"],
	["deri ", "19.11.0000", "Teknik teletubies", "deri@gmail.com"],
	["febi", "19.11.1111", "Teknik teletubies", "deri@gmail.com"]

];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
	<style>
		
	</style>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>
	
		
		<?php foreach($mhs as $value) : ?>
		<ul>
			<!-- <li><?= $value?></li> -->
			<li>Nama : <?= $value[0]?></li>
			<li>NIM : <?= $value[1]?></li>
			<li>Jurusan : <?= $value[2]?></li>
			<li> Email : <?= $value[3]?></li>
		</ul>
		<?php endforeach;?> 
		
	

</body>
</html>