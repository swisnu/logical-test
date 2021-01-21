<!DOCTYPE html>
<html>
<head>
	<title>LOOPING CONDITION</title>
</head>
<body>
	<?php 
		foreach (range(1, 50) as $angka) {
			if($angka % 3 != 0 && $angka % 5 != 0) {
				echo $angka.'<br>';
				continue;
			}
			if ($angka % 3 == 0) echo "Foo";
			if ($angka % 5 == 0) echo "Bar";
			echo '<br>';
		}
	?>
</body>
</html>