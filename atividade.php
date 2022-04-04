<html> 
	<head>
	 	<meta charset="utf-8" />
	 	<title>Curso PHP</title>
	 </head>

	 <body>

	 	<?php
	
	 	static $idade = 69;
	 	static $peso = 50;		

	 	if($idade >= 16 && $idade <=69 && $peso >= 50) {
	 		echo 'Atende aos requisitos para a doação de sangue';
	 	}

	 	else {
	 		echo 'Não atende aos requisitos para a doação de sangue';
	 	}

	 	?>



	 </body>

	 <hmtl>