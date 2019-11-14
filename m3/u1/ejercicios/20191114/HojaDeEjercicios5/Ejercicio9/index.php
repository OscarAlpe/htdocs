<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 5 / Ejercicio 9</title>
    </head>
    <body>
        <?php
            function hayNegativo($array) {
                $hayNegativo = false;
                $salida="";
                
                foreach ($array as $valor) {
                    if ($valor < 0) $hayNegativo = true;
                }
                
                if ($hayNegativo) {
                    $salida = "hay negativos";
                } else {
                    $salida = "todos positivos";
                }
                
                return $salida;
            }
            
            echo hayNegativo([1,-2,3]);
        ?>
    </body>
</html>
