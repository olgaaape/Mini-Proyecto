<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
<?php
$C =0;
    function elMayor($A, $B, &$C){
        if($A > $B){
            $C = $A;
        }
        if($A > $B){
            $C = $B;
        }
        if($A == $B){
            $C = 0;
        }
       
    }
    elMayor(5,4,$C);
   echo "El mayor es $C" ;
?>
</body>