<html>
<head>
<title>Online PHP Script Execution</title>


</head>
<body>
<?php
$numero = random_int(1,5);
$cont = 0;
$suma = (4*$numero) + ($numero - 1);
do{
    for ($i=1; $i<= $numero; $i++){
        for($j=1; $j<= 4; $j++ ){
        echo "<img src=ladrillo.jpeg width=30>";
    }
    echo "<img src=blanco.png width=30>";
    }
    $cont++;
    echo "<br>";
} while ($cont<2);

for ($j=1; $j<= $suma; $j++){
        echo "<img src=ladrillo.jpeg width=30>";
    }
?>

</body>
</html>