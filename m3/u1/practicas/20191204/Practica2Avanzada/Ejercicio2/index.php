<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica 2 avanzada - Ejercicio 2</title>
    </head>
    <body>
        <?php
            $tirada = [];
            $valorTirada = 0;
            $maximoTirada = 0;
            $numeroMaximaTirada = 0;
            $numTirada = 0;
            
            // Con array bidimensional enumerado
            for ($i=0; $i<10; $i++) {
                $numTirada = $i + 1;
                echo "Tirada $numTirada<br>";
                for ($j=0; $j<3; $j++) {
                    $tirada[$i][$j] = rand(1, 6);
                    echo '<img src="'.$tirada[$i][$j].'.svg">';
                }
                echo "<br>";
            }
            
            for ($i=0; $i<10; $i++) {
                $valorTirada = 0;
                for ($j=0; $j<3; $j++) {
                    $valorTirada += $tirada[$i][$j];
                }
                if ($valorTirada > $maximoTirada) {
                    $maximoTirada = $valorTirada;
                    $numeroMaximaTirada = $i;
                }
            }
            
            echo "Tirada con máxima puntuación<br>";
            $numTirada = $numeroMaximaTirada + 1;
            echo "Número de tirada $numTirada puntuación $maximoTirada<br>";
            for ($j=0; $j<3; $j++) {
                echo '<img src="'.$tirada[$numeroMaximaTirada][$j].'.svg">';
            }
            
            echo "<br>";
            
            $tirada = [];
            $maximoTirada = 0;
            $numeroMaximaTirada = 0;
            
            // Con array bidimensional asociativo
            for ($i=0; $i<10; $i++) {
                $numTirada = $i + 1;
                echo "Tirada $numTirada<br>";
                $tirada[$i]["dado1"] = rand(1, 6);
                echo '<img src="'.$tirada[$i]["dado1"].'.svg">';
                $tirada[$i]["dado2"] = rand(1, 6);
                echo '<img src="'.$tirada[$i]["dado2"].'.svg">';
                echo "<br>";
            }
            
            for ($i=0; $i<10; $i++) {
                $valorTirada = 0;
                $valorTirada += $tirada[$i]["dado1"];
                $valorTirada += $tirada[$i]["dado2"];
                if ($valorTirada > $maximoTirada) {
                    $maximoTirada = $valorTirada;
                    $numeroMaximaTirada = $i;
                }
            }
            
            echo "Tirada con máxima puntuación<br>";
            $numTirada = $numeroMaximaTirada + 1;
            echo "Número de tirada $numTirada puntuación $maximoTirada<br>";
            echo '<img src="'.$tirada[$numeroMaximaTirada]["dado1"].'.svg">';
            echo '<img src="'.$tirada[$numeroMaximaTirada]["dado2"].'.svg">';
        ?>
    </body>
</html>
