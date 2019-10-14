<?php
$nombre = $_REQUEST["nombre"];

$clave= $_REQUEST["contraseña"];


$semaforo= $_REQUEST["color"];

if(isset($_REQUEST["publicidad"]) == "on"){
    $publicidad = "Publicidad SI";
    
} else {
    $publicidad=" NO publicidad";
   
}
$solucion = " ";
$ingles="Ingles,"; $frances = "Frances,"; $aleman="Aleman";
if( isset($_REQUEST["ingles"]) == "on"){
    $solucion = $solucion . " " . $ingles;
}
if( isset($_REQUEST["frances"]) == "on"){
    $solucion = $solucion . " " . $frances;
}
if( isset($_REQUEST["aleman"]) == "on"){
    $solucion = $solucion . " " . $aleman;
}

$año = $_REQUEST["año"];

$ciudadesArray = $_REQUEST["ciudad"];

$ciudad= " ";

foreach($ciudadesArray as $valor){
    $ciudad = $ciudad . " " . $valor;
}

$comentarios = $_REQUEST["comentarios"];


echo "Nombre: " . $nombre;
echo "<br>" ;

echo "Clave: " . $clave;
echo "<br>" ;

echo "Semaforo: " . $semaforo;
echo "<br>" ;

echo "Publicidad: " . $publicidad;
echo "<br>" ;

echo "Idiomas: " . $solucion;
echo "<br>";

echo "Año de fin de estudios: " . $año ;
echo "<br>";

echo "Lista de los codigos postales de provincias: " . $ciudad ;


echo "<br>";

echo "Comentarios: " . $comentarios;
?>