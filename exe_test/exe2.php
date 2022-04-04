<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exe</title>
</head>
<body>
	<?php 

	$vet = [1, 2, 3, 5, 7, 10, 11, 13, 17, 55, 66, 71, 82, 98, 103, 107];
	$result = [];
	for ($i=0; $i <count($vet); $i++) { 
		if ($vet[$i] % 2 == 0) {
			echo 'Não é primo '. $vet[$i]. '<br />';
		}

		else {
			$result [] = [$vet[$i]];
		}
	}

	echo '<pre>';
	print_r($result);

	 ?>

</body>
</html>