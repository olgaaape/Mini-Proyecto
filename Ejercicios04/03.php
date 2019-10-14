<html>
<head>
<title>Online PHP Script Execution</title>


</head>
<body>


	<form  action="03procesa.php" method="post" enctype="multipart/form-data">
		<p>Numero1: <input type="number" name="numero1"></p>
		<p>Numero2: 10<input type="range" name="numero2" min="10" max="100" >100</p>
 		<p>Estaciones: <input list="estaciones" name ="estaciones">
  			<datalist id="estaciones">
   				<option value="Primavera">
    			<option value="Verano">
    			<option value="Otoño">
    			<option value="Invierno">
  			</datalist>
		</p>
		<p>Color favorito: <input type="color" name="color"></p>
		<p>Buscar: <input type="search" name="buscar"></p>
		<p>Nombre: <input type="text" name="nombre"></p>
		<p>Apellido: <input type="text" name="apellido"></p>
		<p>E-mail <input type="email" name="email"></p>
		<p>Fecha de nacimiento: <input type="date" name="date"></p>
		<p>Edad: <input type="number" name="edad" min="0" max="150"></p>
		<p>Página personal: <input type="url" name="pagina"></p>
		<p>Horario: De <input type="time" name="inicio"> a: <input type="time" name="fin"></p>
		<p><input type="submit" name="Enviar consulta"></p>

</form>





</body>
</html>
