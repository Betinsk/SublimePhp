<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Funcoes</title>
</head>
<body>

	<?php 


		//void
		function exibirBoasVindas() {
			echo "Bem vindo ao curso de PHP!'<br/>'";
		}

		exibirBoasVindas();		

		//return (com retorno)
		function calcularAreaTerreno($largura, $comprimento) {
			return $largura * $comprimento;
		}


		echo calcularAreaTerreno(5, 5);


	 ?>

</body>
</html>