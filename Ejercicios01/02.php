<html>
<head>
</head>
<body>
<h1> Escalera de color </h1>
<?php
	$numero = random_int(1,9);
	
	for ($i=1;$i<=$numero;$i++){
	    echo "<br>";
		for ($j=1;$j<=$i;$j++){
			if ($i%2==0){
				$color="red";
			} else{
			    $color="blue";
			}	
		$cad= <<<FOO
		<a style='color:$color'> $i </a>
FOO;
		echo $cad;
		
		}
		
			
		}