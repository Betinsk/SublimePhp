<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mat Funcoes</title>
</head>
<body>

	<?php 

	$num = 7.49999;

	echo ceil($num).'<br />'; // arrendonda pra cima

	echo floor($num).'<br />'; // arrendonda pra baixo

	echo round($num).'<br />'; // arrendonda com base na fração

	echo rand(10, 20).'<br />'; // gera um valor aleatório 0 até randmax

	echo getrandmax().'<br />'; // gera um valor aleatório 0 até randmax

	 ?>
</body>
</html>