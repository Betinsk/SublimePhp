<html> 
	<head>
	 	<meta charset="utf-8" />
	 	<title>Curso PHP</title>
	 </head>

	 <body>

	 	<?php
	 
	 		// 
	 		$usuario_cartao_loja = true;
	 		$valorCompra = 75;

	 		$valorFrete = 50;

	 		$recebeu_desconto_frete = false;

	 		if($usuario_cartao_loja == true && $valorCompra >= 400) {
	 			$valorFrete = 0;
	 			$recebeu_desconto_frete = true;
	 		}		
	 	else if ($usuario_cartao_loja == true && $valorCompra >= 300) {
	 		$valorFrete = 10;
	 		$recebeu_desconto_frete = true;
	 	}

	 	 	else if ($usuario_cartao_loja == true && $valorCompra >= 100) {
	 		$valorFrete = 25;
	 		$recebeu_desconto_frete = true;
	 	}

	 	else {
	 		$recebeu_desconto_frete = false;
	 		echo 'Voce não possui nenhuma condição para receber frete gratis';
	 	}

	 	?>

	 	<h1>Detalhes do pedido</h1>
	 	<p>Possui o cartão da loja?

	 		<?php



	 		if ($usuario_cartao_loja == true) {
	 			echo 'Sim';
	 		}

	 		else {
	 			echo 'Não';
	 		}


	 		?>
		</p>


		<p>Valor da compra: <?= $valorCompra?> </p>

			 	<p>Recebeu desconto no frete?

	 		<?php

	 		if ($recebeu_desconto_frete == true) {
	 			echo 'Sim';
	 		}

	 		else {
	 			echo 'Não';
	 		}


	 		?>
		</p>

			<p>Valor da frete: <?= $valorFrete ?> </p>
	 </body>

	 <hmtl>