<html>
<head>
<title>Online PHP Script Execution</title>
<style>
table, tr, td{
border:2px solid black;
border-collapse:collapse;
color: blue;
}
</style>
</head>
<body>
<?php

$array=generarArray();
$cont=1;
function generarArray(){
    
    $numero = random_int(1,90);
    $array[0]=$numero;
    
    do{
        $contrepe=0;
        $numero = random_int(1,90);
        
        for ($i=0;$i<count($array);$i++){
            
            if ($numero==$array[$i]){
                $contrepe++;
            }
            
        }
        if ($contrepe==0){
            $array[$cont]=$numero;
            $cont++;
            
        }
        
    }while($cont<9);
    
    sort($array);
    return $array;
    
}

echo "<table>";
echo "<tr>";
for ($i=0;$i<count($array);$i++){

    echo "<td>";
    echo $array[$i];
    echo "</td>";
}

echo "</tr>";
echo "</table>";



?>

</body>
</html>