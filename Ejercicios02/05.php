<html>
<head>
<title>Online PHP Script Execution</title>


</head>
<body>
<?php


function tabla($filas,$columnas,$borde,$contenido){
    echo "<table border=$borde>";
    
    for ($i=1; $i<=$filas; $i++){
        echo "<tr>";
        for ($j=1; $j<=$columnas;$j++){
            echo "<td>";
            echo $contenido;
            echo "</td>";
        }
        echo "</tr>";
    }
    
    
    
    echo "</table>";
}
tabla(10,3,10,"HOLA");

?>

</body>
</html>