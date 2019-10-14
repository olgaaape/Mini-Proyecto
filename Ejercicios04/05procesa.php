<?php
$nombre = $_REQUEST["nombre"];
$apellidos = $_REQUEST["apellidos"];

$aficiones = " ";
$leer="Lectura,"; $tele = "ver la tele,"; $deporte="hacer deporte,";$fiesta = "salir de fiesta";
if( isset($_REQUEST["leer"]) == "on"){
    $solucion = $solucion . " " . $leer;
}
if( isset($_REQUEST["tele"]) == "on"){
    $solucion = $solucion . " " . $tele;
}
if( isset($_REQUEST["deporte"]) == "on"){
    $solucion = $solucion . " " . $deporte;
}
if( isset($_REQUEST["fiesta"]) == "on"){
    $solucion = $solucion . " " . $fiesta;
}
?>