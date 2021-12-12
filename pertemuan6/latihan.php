<!-- <?php
		$name = ["lalu", "ibnu", "dayat", "deri", "febi"];

		?> -->

<!DOCTYPE html>
<html>

<head>
	<title>Latihan 2</title>
	<style>
		.kotak {
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
			transition: 1s;
		}

		.kotak:hover {
			transform: rotate(360deg);
			border-radius: 50%;
		}

		.clear {
			clear: both;
		}
	</style>
</head>

<body>
	<?php
	$angka = [
		[1, 2, 3],
		[4, 5, 6],
		[7, 8, 9],
	];
	//echo var_dump($angka);
	// echo $angka[1][1];
	?>
	<?php foreach ($angka as $value) : ?>
		<?php foreach ($value as $a) : ?>
			<div class="kotak"><?= $a ?></div>
		<?php endforeach ?>
		<div class="clear"></div>
	<?php endforeach ?>

	<br>
</body>

</html>