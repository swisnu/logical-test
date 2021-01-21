<!DOCTYPE html>
<html>
<head>
	<title>OPERATOR LOGIC</title>
</head>
<body>
	<?php 
		// Membuat sebuah fungsi dengan nama pembagi
		function pembagi($nilai_a, $nilai_b){
			//mendeskripsikan nilai awal
			$hasil = 0;
			//membuat kondisi dimana nilai a lebih kecil sama dengan nilai b
			while($nilai_a >= $nilai_b){
				// sama dengan $nilai_a = $nilai_a - $nilai_b
				$nilai_a -= $nilai_b;
				$hasil++;
			}
			return $hasil;
		}

		//inisialisasi nilai
		$a = 7;
		$b = 2;
		//perintah untuk mencetak hasil dari fungsi pembagian
		echo "Hasil Bagi ". $a ."/".$b."=".pembagi($a,$b);
	?>
</body>
</html>