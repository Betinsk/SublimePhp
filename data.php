<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data PHP</title>
</head>
<body>

	<?php 
	date_default_timezone_set('America/Sao_Paulo');


	// recuperação data

	echo date('z').'</br>';


	//dia/mes/ano/horas:minutos

	echo date('d/m/Y H:i').'</br>';

	//

	echo date_default_timezone_get().'</br></br>';

	$data_inicial = '2018-04-24';
	$data_final = '2018-05-15';

	//TimeStamp

	$time_inicial = strtotime($data_inicial);
	$time_final = strtotime($data_final);

	echo $data_inicial . ' - ' . $time_inicial;
	echo '</br>';
	echo $data_final . ' - ' . $time_final;
	echo '</br>';


	$dferenca_times = $time_final - $time_inicial;
	$dferenca_times = $dferenca_times / 86400;
	echo $dferenca_times;


	 ?>


</body>
</html>