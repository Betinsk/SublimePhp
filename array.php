<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array</title>
</head>
<body>
	<<?php 

		//squenciais (numericos)

		//$lista_frutas = array('Banana' ,'Maça', 'Morango', 'Uva', 'Abacate');

		$lista_frutas =['Banana' ,'Maça', 'Morango', 'Uva', 'Abacate'];

		$lista_frutas[] = 'Abacaxi';

		echo '<pre>';
		var_dump($lista_frutas);
		echo '<hr />';
		print_r($lista_frutas);

	
		echo '<hr/>';

	//associativos

		$lista_frutas = array(
			'a' => 'Banana' ,
			'b' => 'Maça',
			'c' => 'Morango',
			 'd' => 'Uva',
			  'e' =>  'Abacate');

echo '<pre>';
		var_dump($lista_frutas);
		echo '<hr />';
		print_r($lista_frutas);

	 ?>

</body>
</html>