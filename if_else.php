<html> 
	<head>
	 	<meta charset="utf-8" />
	 	<title>Curso PHP</title>
	 </head>

	 <body>

	 	<h3>Variaveis</h3>

	 	<?php
	$dataNascimento = '2005-07-04';
	$data = new DateTime($dataNascimento );
	$resultado = $data->diff(new DateTime( date('Y-m-d')));

	

	 	if($resultado < 18) {
			echo 'Vc precisa ter 18 anos </br> </br>'; 
	 		
 }
 	else {
	 	echo 'Cadastro concluido! vc possui </br>'; 
	 	echo $resultado->format('%Y anos');
	 		}
	 

	 	?>

 	
	 </body>

	 <hmtl>