<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array</title>
</head>
<body>
	<<?php 

		$list_coisas = array();

		
		$list_coisas['frutas'] = array(1 =>'maca', 2 => 'banana', 3=> 'morango', 4=> 'uva');
		$list_coisas['pessoas'] = [1 =>'Joao', 'José', 'Maria'];

		echo '<pre>';
		print_r($list_coisas);
		echo $list_coisas['frutas'][3];
		echo '<br/ >';
		echo $list_coisas['pessoas'][2];
	 ?>
</body>
</html>