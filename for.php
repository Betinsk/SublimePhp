<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>For</title>
</head>
<body>
	<?php 

	$array = ['Banana', 'Maça', 'Uva'];

	for ($i=0; $i < 3; $i++) { 
		echo '<pre>';
		print_r($array);
	}

	 ?>
</body>
</html>