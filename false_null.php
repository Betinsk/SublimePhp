<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>False</title>
</head>
<body>

	<?php 

	$funcionario = null;
	$funcionario2 = '';
	$funcionario3 = false;

	if (is_null($funcionario)) {
		echo 'Sim a variavél é null';

	}

	else {
		echo 'Não, a variavél não é null';
	}
 
	echo '<br />';

	if (is_null($funcionario2)) {
		echo 'Sim a variavél é null';

	}

	else {
		echo 'Não, a variavél não é null';
	}

	echo '<br />';
	echo '<hr>';

	if (empty($funcionario)) {
		echo 'Sim a variavél é null';

	}

	else {
		echo 'Não, a variavél não é null';
	}
 	

	echo '<br />';

	if (empty($funcionario2)) {
		echo 'Sim a variavél é null';

	}

	else {
		echo 'Não, a variavél não é null';
	}

	echo '<br />';
	echo '<hr>';

	if (empty($funcionario3)) {
		echo 'Sim a variavél é null';

	}

	else {
		echo 'Não, a variavél não é null';
	}
 	

	echo '<br />';

	if (empty($funcionario3)) {
		echo 'Sim a variavél é null';

	}

	else {
		echo 'Não, a variavél não é null';
	}





	 ?>

</body>
</html>