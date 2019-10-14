<html>
<head>
<title>Online PHP Script Execution</title>
<style>
#Arriba{
    background-color: blue;
    color : white;
    width:100%;
    height:10%;
    text-align: center;
}
*{
margin :0;
padding: 0;
}

</style>
</head>
<body>
<div id="Arriba">
<h2> DATOS PERSONALES </h2>
</div>

<form action="04procesa.php" method="post" enctype="multipart/form-data">
<p> Nombre: <input type="text" name="nombre"></p>
<p> Apellidos: <input type="text" name="apellidos"></p>
<p> Edad:
     <select name="edad">
      <option value="mas">Mayor de 55 </option>
      <option value="menos">Menor de 55</option>
    </select> 
</p>
<p>Sexo: <input type="radio" value="hombre" name="sexo">Hombre <input type="radio" value ="mujer" name="sexo">Mujer</p>

<p>Hobbies:</p>
<p> <input type="checkbox" name="leer">Lectura
	<input type="checkbox" name="tele"> Ver la tele
	<input type="checkbox" name="deporte"> Hacer deporte
	<input type="checkbox" name="fiesta"> Salir de marcha
</p>

	<input type="submit" value="Enviar"></p>
</form>

</body>
</html>
