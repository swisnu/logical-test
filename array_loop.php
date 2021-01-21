<!DOCTYPE html>
<html>
<head>
	<title>Array Loop</title>
</head>
<body>
	<?php 
		$aplikasi = array("gtAkademik","gtFinansi","gtPerizinan","eCampuz","eOviz");
		$apl = array("gtAkademik" => 1,"gtFinansi" => 2,"gtPerizinan" => 3,"eCampuz" => 4,"eOviz" => 5);

		while (list($aplikasi, $urutan) = each($apl)) {
			echo $aplikasi,"<br>";
		}
	?>
</body>
</html>