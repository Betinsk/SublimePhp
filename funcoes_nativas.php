<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Funcoes Nativas</title>
</head>
<body>
	<?php 

/*	$array = array('Nootbook', 'Teclado');
	$retorno = is_array($array);


	if ($retorno) {
		echo 'Sim, é um array';
	}

	else {
		echo 'Não, não é um array';
	}
*/
/*

	$array = [1 => 'a', 7 => 'b', 18 => 'c'];
	echo '<pre>';
		print_r($array);
	echo '<pre>';


	$chaves_array = array_keys($array);
   echo '<pre>';
		print_r($chaves_array);
	echo '<pre>';


*/
	/*	$array = array('Nootbook', 'Teclado', 'Gabinete', 'Teclado', 'Fonte', 'Cabo hdmi');
		echo '<pre>';
		print_r($array);
		echo '<pre>';

		echo sort($array);

		echo '<pre>';
		print_r($array);
		echo '<pre>';


		$array = array('Nootbook', 'Teclado', 'Gabinete', 'Teclado', 'Fonte', 'Cabo hdmi');
		echo '<pre>';
		print_r($array);
		echo '<pre>';

		echo asort($array);

		echo '<pre>';
		print_r($array);
		echo '<pre>';


	$array = array('Nootbook', 'Teclado', 'Gabinete', 'Teclado', 'Fonte', 'Cabo hdmi');
		echo '<pre>';
		print_r($array);
		echo count($array);
		echo '<pre>';

	


		$array1 = ['osx', 'windows'];
		$array2 = array('Linux');
		$array3 = ['Solarios'];

		$novoArray = array_merge($array1, $array2, $array3);
		echo '<pre>';
		print_r($novoArray);
		echo '<pre>';
	

		$string = '26/04/2018';
		$array = explode('/', $string);

	echo '<pre>';
	echo $string;
		print_r($array);
		echo $array[2]. '-'. $array[1]. '-'. $array[0];
		echo '<pre>';

*/	


		$array = ['a', 'b', 'x', 'y'];
		$stringRetorno = implode('º', $array);
		echo $stringRetorno;	



	 ?>
</body>
</html>