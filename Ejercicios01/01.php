<html>
<head>
</head>
<body>
<h1> Operaciones </h1>
<hr>
<?php
	$numero1 = random_int(1,10);
	$numero2 = random_int(1,10);
	$solucion = $numero1;
	echo $numero1,"+",$numero2, ' = ',$numero1+$numero2;
	echo "<br>";
	echo $numero1,"-",$numero2, ' = ',$numero1-$numero2;
	echo "<br>";
	echo $numero1,"*",$numero2, ' = ',$numero1*$numero2;
	echo "<br>";
	echo $numero1,"/",$numero2, ' = ',$numero1/$numero2;
	echo "<br>";
	echo $numero1,"%",$numero2, ' = ',$numero1%$numero2;
	echo "<br>";
	for ($i=1;$i<=$numero2;$i++){
		$solucion = $numero1 * $solucion;
	}
	echo $numero1,"**",$numero2, ' = ',$solucion;
?>
<hr>
</body>
</html>