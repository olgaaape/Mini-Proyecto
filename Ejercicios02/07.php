<html>
<head>
<title>Online PHP Script Execution</title>


</head>
<body>
<?php
    echo "<div>";
    echo "<hr> tabla de colores </hr>";
    echo "</div>";
    echo "<table border=2 width=40% height=100%>";
    
    for ($i=1; $i<=10; $i++){
        echo "<tr>";
        for ($j=1; $j<=10;$j++){
            $micolor= color();
            echo "<td bgcolor=$micolor>";
            echo "</td>";
        }
        echo "</tr>";
    }
    
    
    
    echo "</table>";

    function color(){
        
        $numero= random_int(1,5);
        switch ($numero){
            case 1:
                $color='red';
                break;
            case 2:
                $color='green';
                break;
            case 3:
                $color='blue';
                break;
            case 4:
                $color='white';
                break;
            case 5:
                $color='black';
                break;
            
        }
        return $color;
    }

?>

</body>
</html>