<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
<?php
$array = ["El Pais" => "https://elpais.com/","El Mundo" => "https://www.elmundo.es/","La Razon" => "https://www.larazon.es/",
    "Marca" => "https://www.marca.com/","As" => "https://as.com/"];

$opcion=array_rand($array);

$enlace=$array[$opcion];



echo "El medio recomendado es : <a href=".$enlace."/>".$opcion."</a>";
?>

</body>
</html>