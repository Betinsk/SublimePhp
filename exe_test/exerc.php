<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Exe
	</title>
</head>
<body>

	<?php 



	// echo rand(10, 20).'<br />'; // gera um valor aleatório 0 até randmax

	/*	for ($i=0; $i <6; $i++) { 
			$rand = rand(1, 60);
			$vet[] = $rand;
				
			}	
			echo '<pre>';
			print_r($vet). '<br />';
		}
 */


		$numeros = array();

		while(count($numeros) <=5) {
			$num = rand(1, 60);

			if (!in_array($num, $numeros)) {
				echo 'O número sorteado foi '. $num. '<br />';
				$numeros [] = $num;
			}

			else {
				echo 'O número ' . $num. ' Já foi sorteado! <br />';
			}
		
		}
		echo '<pre>';
		print_r($numeros);
	 ?>
	





</body>
</html>