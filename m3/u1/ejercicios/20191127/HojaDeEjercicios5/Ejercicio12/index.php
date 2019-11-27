<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 5 / Ejercicio 12</title>
    </head>
    <body>
        <?php
            function imprimeCadenaAlReves($cadena) {
                for ($i=strlen($cadena)-1; $i>=0; $i--) {
                    echo $cadena[$i];
                }
            }
            
            imprimeCadenaAlReves("Esto es una prueba");
        ?>
    </body>
</html>
