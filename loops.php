<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Loops</title>
</head>
<body>

	<?php 


	$num = 0;

	while ($num < 10) {

			$num++;

			if($num == 2 || $num == 6) {
				continue;

}
	
		echo "$num <br/ >";
		/*	if($num > 100) {
				break;
	}	
	*/
			}
		

	echo 'Fim';


	 ?>

</body>
</html>