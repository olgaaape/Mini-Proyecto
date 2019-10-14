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
$array = ["El Pais" => "https://elpais.com/","El Mundo" => "https://www.elmundo.es/","La Razon" => "https://www.larazon.es/",
    "Marca" => "https://www.marca.com/","As" => "https://as.com/"];
echo "<ul>";
echo "<li>";
echo "<a href=".$array["El Pais"]."/>" . "EL Pais </a>";
echo "</li>";
echo "</ul>";

echo "<ul>";
echo "<li>";
echo "<a href=".$array["El Mundo"]."/>" . "El Mundo </a>";
echo "</li>";
echo "</ul>";

echo "<ul>";
echo "<li>";
echo "<a href=".$array["La Razon"]."/>" . "La Razon </a>";
echo "</li>";
echo "</ul>";

echo "<ul>";
echo "<li>";
echo "<a href=".$array["Marca"]."/>" . "Marca </a>";
echo "</li>";
echo "</ul>";

echo "<ul>";
echo "<li>";
echo "<a href=".$array["As"]."/>" . "As </a>";
echo "</li>";
echo "</ul>";


?>

</body>
</html>