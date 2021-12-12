<?php
$angka = [
			[1,2,3],
			[4,5,6],
			[7,8,9],
		];

		foreach ($angka as $value ) :
			foreach ($value as $a ) :
				print($a);
			endforeach;
		endforeach;
?>