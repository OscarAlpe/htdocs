<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 5 / Ejercicio 8</title>
    </head>
    <body>
        <?php
            function sonIguales($n1, $n2) {
                $salida = "";
                
                if ($n1 == $n2) {
                    $salida = "iguales";
                } else {
                    $salida = "distintos";
                }
                
                return $salida;
            }
            
            echo sonIguales(2, 3);
        ?>
    </body>
</html>
