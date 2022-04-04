<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Imposto</title>
</head>
<body>

	<?php 


		$salary = 2500.65;
		$imposto = 0;

		function calculaImpost($salary) {

			if ($salary < 1903.98) {
				$imposto = 0;
				echo 'Vc está insento do IR e pagará ';
			}

			else if ($salary > 1903.98 && $salary <= 2826.65) {
						$imposto = $salary * 7.5 / 100;
				}

			else if ($salary > 2826.65 && $salary <= 3751.05) {
					$imposto = $salary * 15.0 / 100;
		
			}

			else if ($salary > 3751.05 && $salary <= 4664.68) {
					$imposto = $salary * 22.5 / 100;
			}

			else {
				$imposto += $salary * 27.5 / 100;
			}
			
		return $imposto;
	};

		

		echo 'Seu salario é '. $salary.' e vc pagará '. calculaImpost($salary). ' de Ir';
 	 ?>

</body>
</html>