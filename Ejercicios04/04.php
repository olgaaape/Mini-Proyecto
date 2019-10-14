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
<h2> Formulario con múltiples campos </h2>
</div>

<form action="04procesa.php" method="post" enctype="multipart/form-data">
<h3> CAMPOS DE TEXTO:</h3>
<p> Nombre: <input type="text" name="nombre"></p>
<p> Contraseña: <input type="password" name="contraseña" ></p>

<hr/>

<h3> RADIO:</h3>
<p> Rojo: <input type="radio" value="rojo" name="color"></p>
<p> Naranja: <input type="radio" value ="naranja" name="color"></p>
<p> Verde: <input type="radio" value = "verde" name="color"></p>

<hr/>

<h3> CHECKBOX:</h3>
<p> Quiero recibir publicidad: <input type="checkbox" name="publicidad"></p>
<h3> MULTI 	CHECKBOX:</h3>
<p> Ingles <input type="checkbox" name="ingles">
	Francés <input type="checkbox" name="frances">
	Alemán <input type="checkbox" name="aleman">
</p>

<hr/>

<h3> SELECT: </h3>
<H4> Simple: </H4>
<p> Año de finalización de estudios: 
     <select name="año">
      <option value="2016">2016</option>
      <option value="2017">2017</option>
      <option value="2018">2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
      <option value="2021">2021</option>
      <option value="2022">2022</option>
      <option value="2023">2023</option>
      <option value="2024">2024</option>
    </select> 
</p>
<H4> Múltiple: </H4>
<p> Ciudades: 

	<select multiple="multiple" name="ciudad[]" >
      <option value="33">Asturias</option>
      <option value="17">Gerona</option>
      <option value="28">Madrid</option>
      <option value="41">Sevilla</option>
      <option value="36">Pontevedra</option>
      <option value="06">Badajoz</option>
      <option value="15">A Coruña</option>

    </select> 
</p>

<hr/>

<h3> TEXTAREA:</h3>
<p> Escriba sus comentarios:<textarea rows="4" cols="50" name="comentarios"></textarea></p>

<hr/>

<h3> BOTONES:</h3>
<p><input type="reset" value="Resetear el formulario">
	<input type="submit" value="Enviar formulario al servidor"></p>
</form>

</body>
</html>
