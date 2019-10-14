<html>
<head>
<title>Online PHP Script Execution</title>
<style>
    table, tr, td {
    border: 1px solid black;
    border-collapse:collapse;
    
    }
    .dcha{
        text-align: right;
    }
    th{
        text-align : center;
        color: white;
        background-color: black;
    }
</style>
</head>
<body>
<?php
    define("Cien", 100);
    define("CIncuenta", 50);
   $numero1 = random_int(1,Cien);
   
   $maximo = $numero1;
   $minimo = $numero1;
   $suma = $numero1;
   for ($i = 0; $i<= CIncuenta; $i++){
       $numero2 = random_int(1,100);
       if ($numero2 > $maximo){
           $maximo = $numero2;
       } 
       if ($numero2 < $minimo){
           $minimo = $numero2;
        }
        $suma = $suma + $numero2;
   }
   $media = $suma / 50;
?>
<table>
    
    <th colspan="2">Generación de 50 valores aleatorios</th> 
    <tr>
        <td> Minimo</td>
        <td class="dcha"> <?php echo $minimo; ?></td>
    </tr>
    <tr>
        <td> Maximo</td>
        <td class="dcha">  <?php echo $maximo; ?></td>
    </tr>
    <tr>
        <td> Media</td>
        <td class="dcha">  <?php echo $media; ?></td>
    </tr>
</table>
</body>
</html>