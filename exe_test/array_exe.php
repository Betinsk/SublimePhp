<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exe</title>
</head>
<body>

	<?php 

		$novoArray = array('Agua', 'Refri', 'Cerveja');

		echo '<pre>';
		print_r($novoArray);


		$lista_funcionarios = array('Carlos', 'Victor', 'Fernando', 'Carlos Alberto', 'Filipe');

		for ($i=0; $i < 3 ; $i++) { 
			print_r($lista_funcionarios);
		}


	 ?>

</body>
</html>