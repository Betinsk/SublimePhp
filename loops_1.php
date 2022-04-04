<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Loops</title>
</head>
<body>

	<?php 

		$registros = array(
			array('Titulo' => 'Titulo noticia 1', 'conteudo' => 'Conteudo noticia 1'),
			 array('Titulo' => 'Titulo noticia 2', 'conteudo' => 'Conteudo noticia 2'),
			 array('Titulo' => 'Titulo noticia 3', 'conteudo' => 'Conteudo noticia 3'),
			 array('Titulo' => 'Titulo noticia 4', 'conteudo' => 'Conteudo noticia 4'));
			
		echo '<pre>';
		print_r($registros);



		$idx = 0;

		while($idx < count($registros)) {
			
		echo '<h3>'. $registros[$idx]['Titulo']. '</h3>';
		echo '<p>'. $registros[$idx]['conteudo']. '</p>';
		echo '<hr />';

		$idx ++;

		}
	 ?>
			
	

</body>
</html>