<html>
<head>
</head>
<body>
<h1> Escalera de color </h1>

<?php
	$numero = random_int(1,9);
	$espacios = $numero - 1;
	$t=1;
	for ($i = 1; $i <= $numero; $i++){
	    echo "<br>";
	    for ($x = $i; $x <= $espacios; $x++){
	        echo "&nbsp";
	    }
	    
	    for ($j = 1; $j <= $t ; $j++){
	        echo "*";
	  
	    }
	   $t= $t + 2;
	}
	
	
?>

</body>
</html>