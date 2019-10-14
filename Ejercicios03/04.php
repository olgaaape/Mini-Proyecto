<html>
<head>
<title>Online PHP Script Execution</title>
<style>
table, tr, th, td{

border: 1px solid black;
border-collapse:collapse;
}
img{
width:100px;
}
</style>
</head>
<body>
<?php
$deportes = ["Futbol" => "imagenes/futbol.jpg","Baloncesto" => "imagenes/baloncesto.jpg","Natacion" => "imagenes/natacion.jpeg",
    "Tenis" => "imagenes/tenis.jpg","Voley" => "imagenes/voley.jpg"];

echo "<table>";

    echo "<tr>";
    
            echo "<th>Deporte</th>";
     
      
        echo "<th>Logo</th>";
    
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>";
    echo "Futbol";
    echo "</td>";
    
    echo "<td>";
    echo "<img src =".$deportes["Futbol"].">";
    echo "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>";
    echo "Baloncesto";
    echo "</td>";
    
    echo "<td>";
    echo "<img src =".$deportes["Baloncesto"].">";
    echo "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>";
    echo "Natacion";
    echo "</td>";
    
    echo "<td>";
    echo "<img src =".$deportes["Natacion"].">";
    echo "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>";
    echo "Tenis";
    echo "</td>";
    
    echo "<td>";
    echo "<img src =".$deportes["Tenis"].">";
    echo "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>";
    echo "Voley";
    echo "</td>";
    
    echo "<td>";
    echo "<img src =".$deportes["Voley"].">";
    echo "</td>";
    echo "</tr>";

echo "</table>";



?>

</body>
</html>