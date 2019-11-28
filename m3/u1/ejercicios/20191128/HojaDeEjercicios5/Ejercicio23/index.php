<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 5 / Ejercicio 23</title>
    </head>
    <body>
        <?php
            function numCoincidenciasArray($a1, $a2) {
                $resultado = 0;
                
                foreach ($a1 as $valor_a1) {
                    foreach ($a2 as $valor_a2) {
                        if ($valor_a1 == $valor_a2) {
                            $resultado++;
                            break;
                        }
                    }
                }

                return $resultado;
            }
            
            echo "<div>" . numCoincidenciasArray([1, 2, 4, 4, 5], [4, 4, 5, 3]) . "</div>";
        ?>
    </body>
</html>
