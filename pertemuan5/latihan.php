<?php
$name = ["lalu", "ibnu", "dayat", "deri", "febi"];
$change = "";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
	<style>
		.kotak{
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}
		.clear{
			clear: both;
		}
		
	</style>
</head>
<body>

	<?php for($i=0; $i<count($name); $i++) {?>
		<div class="kotak"><?php echo $name[$i]?></div>
	<?php }?>
	<div class="clear"></div>

	<?php foreach($name as $namanya){?>
		<div class="kotak"><?php echo $namanya?></div>
	<?php }?>

	<div class="clear"></div>

	<?php foreach($name as $bla) : ?>
		<div class="kotak"><?= $bla?></div>
	<?php endforeach;?>


</body>
</html>