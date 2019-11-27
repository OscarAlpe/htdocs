<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 5 / Ejercicio 16</title>
    </head>
    <body>
        <?php
            $resultado=0;
            
            function suma2Numeros($a1, $a2) {
                global $resultado;
                
                $resultado = $a1 + $a2;
            }
            
            suma2Numeros(7, 5);
            echo $resultado;
        ?>
    </body>
</html>
