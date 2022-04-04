<html> 
	<head>
	 	<meta charset="utf-8" />
	 	<title>Boletos</title>
	 </head>

	 <body>


	 	<?php

	 	$valor = 100.0;

	 	$percentage = 1;
		 	
		 	$dateStart = date('2022-03-20');
			$dateNow  = date('Y-m-d');

			$dt_calc = strtotime($dateNow) - strtotime($dateStart);
			$dias = floor($dt_calc / (60 * 60 * 24));

			for ($i=0; $i <=$dias; $i++) { 
				$valorAtraso = $valor += $valor * $percentage / 100;	
				
			}
			
			echo'Este é o valor em do boleto em atraso '. $valorAtraso;

	 	?>

 	
	 </body>

	 <hmtl>