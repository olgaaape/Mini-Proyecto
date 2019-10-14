<html>
<head>
<link href="05.css"
      rel="stylesheet" type="text/css">
</head>
<body class="todo">
<h1> tabla2.0 </h1>

<?php
	$numero1 = random_int(1,10);
	$solucion = $numero1;
?>
	<table id="tabla">
	<tr>
		<th> Operación </th>
		<th> Resultado </th>
	<tr>
		<td class="left"><?php echo "$numero1 + $numero2 "?></td> <td class="rigth"><?php echo $numero1 + $numero2?></td>
		
	</tr>
	<tr>
		<td class="left"><?php echo "$numero1 - $numero2" ?></td> <td class="rigth"><?php echo $numero1 - $numero2?></td>
		
	</tr>
	<tr>
		<td class="left"><?php echo "$numero1 * $numero2 " ?></td> <td class="rigth"><?php echo $numero1 * $numero2?></td>
		
	</tr>
	<tr>
		<td class="left"><?php echo "$numero1 / $numero2 " ?></td> <td class="rigth"><?php echo $numero1 / $numero2?></td>
		
	</tr>
	<tr>
		<td class="left"><?php echo "$numero1 % $numero2   " ?></td> <td class="rigth"><?php echo $numero1 % $numero2?></td>
		
	</tr>
<?php
		for ($i=1;$i<=$numero2;$i++){
			$solucion = $numero1 * $solucion;
		}
?>
	 <tr>
		<td class="left"><?php  echo "$numero1 ** $numero2  " ?></td> <td class="rigth"><?php echo $solucion?></td>
	 </tr>
	</table>


</body>
</html>