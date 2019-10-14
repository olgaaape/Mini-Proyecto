<html>
<head>
<title>Online PHP Script Execution</title>
<style>
    table, tr, td {
    border: 1px solid black;
    border-collapse:collapse;
    
    }
</style>
</head>
<body>
<?php
$array=[];
for ($i=0; $i <=20; $i++){
    $numero = random_int(1,10);
    $array[$i] = $numero;
}
echo "<table>";
echo "<tr>";
for ($i=0; $i <=20; $i++){
    echo "<td>";
    echo $array[$i];
    echo "</td>";
}
echo "</tr>";
echo "</table>";
$mayor = mayor($array);
$menor = menor($array);
$repetido = repetidos($array);
echo "<p> El mayor del array es " . $mayor . "</p>";
echo "<p> El menor del array es " . $menor . "</p>";
echo "<p> El mas repetido del array es " . $repetido . "</p>";

function mayor($array){
    $mayor = $array[0];
    for ($i=0; $i < count($array); $i++){
        if ($array[$i] > $mayor){
            $mayor = $array[$i];
        }
    }
    return $mayor;
    
}

function menor($array){
    $menor = $array[0];
    for ($i=0; $i < count($array); $i++){
        if ($array[$i] < $menor){
            $menor = $array[$i];
        }
    }
    return $menor;
    
}

function repetidos($array){
    $numero = 0; //El numero para comparar
    $contini = 0; //Contador para comparar
    $contdef = 0; //El contador del mas repetido
    $pos = 0; //Para recorrer el array en el while
    $repetido = 0; //El numero que mas se repite
    do{
       $numero = $array[$pos];
        
        for ($i=0; $i < count($array); $i++){
            if ($numero == $array[$i]){
                $contini++;
            }
        }
        
        if($contini > $contdef){
            $contdef = $contini;
            $repetido = $numero;
        }
        $contini = 0;
        $pos++;
        
    } while($pos <count($array));
    return $repetido;
}


?>

</body>
</html>