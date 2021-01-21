<!DOCTYPE html>
<html>
<head>
	<title>OPERATOR LOGIC</title>
</head>
<body>
	<?php 
		function pembagi($nilai_a, $nilai_b){
			$hasil = 0;
			while($nilai_a >= $nilai_b){
				$nilai_a -= $nilai_b;
				$hasil++;
			}
			return $hasil;
		}

		$a = 7;
		$b = 2;
		echo "Hasil Bagi ". $a ."/".$b."=".pembagi($a,$b);
	?>
</body>
</html>