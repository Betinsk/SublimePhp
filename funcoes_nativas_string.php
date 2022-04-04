<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Funcoes nativas</title>
</head>
<body>

		<?php

		$texto = 'Curso completo de PHP';
		
		// string to lower
		echo $texto. '<br/>';
		echo strtolower($texto).'<br/><br/>';

		echo '<hr />';

		// string to upper
		echo $texto. '<br/>';
		echo strtoupper($texto).'<br/><br/>';;

		echo '<hr />';

		// string to upper
		echo $texto. '<br/>';
		echo ucfirst($texto).'<br/><br/>';;

		echo '<hr />';

		// string lenght
		echo $texto. '<br/>';
		echo strlen($texto).'<br/><br/>';;

		echo '<hr />';

		// string replace
		echo $texto. '<br/>';
		echo str_replace(' ', '|', $texto).'<br/><br/>';;


		echo '<hr />';

		// string replace
		echo $texto. '<br/>';
		echo substr($texto, 0, 7). '<br/><br/>';;

		




		 ?>

</body>
</html>