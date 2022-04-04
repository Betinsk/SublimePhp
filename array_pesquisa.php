<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ArrayPesquisa</title>
</head>
<body>

	<<?php 

	// in_array()
	//array_search()



	$lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva'];

	echo '<pre>';
	print_r($lista_frutas);
	echo '<pre>';

	$existe2 =  array_search('Uva', $lista_frutas);

	$existe = in_array('Mamão', $lista_frutas);


		if($existe) {
			echo 'Sim, o valor existe';
		}

		else {
			echo 'Não existe';
		}

		echo '<hr>';

		if($existe2 = null) {
			echo 'Sim, o valor existe';
		}

		else {
			echo 'Não existe';
		}


		$list_coisas = [
			'Frutas' => $lista_frutas,
			'Pessoas' => ['Joao', 'Maria']

		];


		echo '<pre>';
		print_r($lista_coisas);
		echo '<pre>';

		echo in_array('Uva', $lista_frutas['Frutas']);

	 ?>

</body>
</html>