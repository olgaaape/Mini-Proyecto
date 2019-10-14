

<?php 

$array = ["Olga" => "123","Guille" => "456","Pedro" => "789"];

$conf = "no";
$nombre = $_REQUEST['nombre'];
$contraseña = $_REQUEST['contraseña'];
foreach ($array as $clave => $valor){
    if($nombre==$clave){
        if($valor==$contraseña){
            $conf = "si";
     }
    }
}

if ($conf == "si"){
    echo "Bienvenido $nombre";
}else{
    echo "<a href=http://localhost/PHP/Ejercicios04/01.php>Intentalo de nuevo</a>";
    
}


?>
