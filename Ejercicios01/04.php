<html>
<head>
</head>
<body>
<h1> El numero del diablo </h1>

<?php
	
	$cont = 0;
	$seguido = 0;
	$timeinicial = microtime(true);
	do{
		$numero = random_int(1,10);
		if ($numero == 6){
			$seguido++;
		} else {
			$seguido = 0;
		}
		$cont++;
		
	}while($seguido < 3);
	$timefinal = microtime(true);
	$timetotal = $timefinal - $timeinicial;
	echo "Han salido tres 6 seguidos tras genera  $cont  ",
	"numeros en  $timetotal milisegundos";
?>

</body>
</html>