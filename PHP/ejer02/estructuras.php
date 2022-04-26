<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .rojo {
            color: red;
        }

        .verde {
            color: green;
        }

        .azul {
            color: blue;
        }
    </style>
</head>
<body>
    <?php
        $aleatorio = rand(1, 10);
        //echo $aleatorio;

        if ($aleatorio < 5) {
            echo "<p class='rojo'>El valor $aleatorio es menor que 5 </p>";
        }else if ($aleatorio > 5) {
            echo "<p class='verde'>El valor $aleatorio es mayor que 5 </p>";
        }else {
            echo "<p class='azul'>El valor $aleatorio es  5 </p>";
        }

        /*$filas = 3;
        $columna = 4;
        echo "<table>";
        for ($i=0; $i < $filas; $i++) { 
            echo "<tr>";
            for ($j=0; $j < $columna; $j++){
                echo "<td>$i-$j</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        */

        $hora = date("H");
    if ($hora <= 8 && $hora <= 12) {
        echo "<p>Buenos dias</p>";
    }else if ($hora > 12 && $hora <= 20) {
        echo "<p>Buenas tardes</p>";
    }else {
        echo "<p>Buenas noches</p>";
    }
    ?>

    

</body>
</html>