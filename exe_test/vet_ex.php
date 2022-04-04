<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vet</title>
</head>
<body>

	<?php 

	$vet = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

	$countPar = 0;
	$countImpar =0;

	for ($i=0; $i <count($vet); $i++) { 
		
		if($vet[$i] % 2 == 0) {
		$countPar ++;

		}

		else {
			$countImpar ++;
		}

	}
		echo $countPar. '<br />';
		echo $countImpar. '<br />';


	 ?>

</body>
</html>