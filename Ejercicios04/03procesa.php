<?php
	
	echo "<h4>Los datos del formulario son:</h4>";
	
	$edad = $_REQUEST['edad'];
	print ("<b><p>La edad es:</p></b> <p>$edad </p>");
	
	$nombre = $_REQUEST['nombre'];
	print ("<b><p>El nombre es:</p></b> <p>$nombre </p>");
	
	$correo= $_REQUEST['email'];
	print ("<b><p>El correo es:</p></b> <p>$correo </p>");

	
	$clave = $_REQUEST['clave'];
	print ("<b><p>Su clave de departamento es:</p></b><p> $clave </p>");
	
	
	$asunto = $_REQUEST['asunto'];
	print ("<b><p>Su asunto es:</p></b> <p>$asunto</p>");
	
	
	$mensaje = $_REQUEST['mensaje'];
	print ("<b><p>El problema es:</p></b> <p>$mensaje </p>");
	
	echo "<b><p>Imagen del error:</b></p>";
	$ruta="datos";
	$archivos=$_FILES['archivo']['tmp_name'];
	$nombrearchivo=$_FILES['archivo']['name'];
	move_uploaded_file($archivos,$ruta."/".$nombrearchivo);
	$ruta=$ruta."/".$nombrearchivo;	
	echo "<p align=left><img src=$ruta></p>";

	
	echo "<b><p>Su departamento es:</b></p>";
	$departamento = $_REQUEST['departamento'];
	foreach ($departamento as $dep){
	print ("<p>$dep</p>");
	}
	
	
	$puesto = $_REQUEST['puesto'];
	print ("<b><p>El puesto es:</p></b> <p>$puesto</p>");
	
	
	echo "<br/>";
	echo "Enviado a las " . date("h:i:sa") . " del " . date("d/m/Y");
?>