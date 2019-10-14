<html>
<head>
<title>Online PHP Script Execution</title>


</head>
<body>

<?php
if (isset($_REQUEST['Enviar'])){
    

$numero1 = $_REQUEST['numero1'];
$numero2 = $_REQUEST['numero2'];
$error="n";
$operacion = $_REQUEST['operacion'];
$opcion= $_REQUEST['opcion'];

switch ($operacion){
    
    case '+':
       $resultado =$numero1 + $numero2;
       break;
 
    case '-':
        $resultado =$numero1 - $numero2;
        break;
    case '/':
        if ($numero2==0){
            $error="s";
            
        }else{
            $resultado =$numero1 / $numero2;
        }
        
        break;
    case '*':
        $resultado =$numero1 * $numero2;
        break;
}
if ($error=="n"){
    
switch ($opcion){
    
    case 'decimal':
        $resultado= $resultado;
        break;
        
    case 'binario':
        $resultado=decbin($resultado);
 
        break;
    case 'hexadecimal':
        $resultado=dechex($resultado);
        
        break;
    default:
        $resultado=$resultado;
}
}

    if ($error=="n"){
        echo "Resultado en $opcion : $resultado";
    }else{
        echo "no puedes dividir entre 0";
    }


}else{

?>

<form  method="post" enctype="multipart/form-data">
<p>Numero1: <input type="number" name="numero1"></p>
<p>Numero2: <input type="number" name="numero2"></p>
<p>+<input type="radio" value="+" name="operacion"></p>
<p>-<input type="radio" value="-" name="operacion"></p>
<p>/<input type="radio" value="/" name="operacion"></p>
<p>*<input type="radio" value="*" name="operacion"></p>
<p>Decimal <input type="radio" value="decimal" name="opcion"></p>
<p>Hexadecimal <input type="radio" value="hexadecimal" name="opcion"></p>
<p>Binario<input type="radio" value="binario" name="opcion"></p>
<p><input type="submit" name="Enviar"></p>
</form>
<?php 
}
?>
</body>
</html>