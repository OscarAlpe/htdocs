<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 5 / Ejercicio 11</title>
    </head>
    <body>
        <?php
            function imprimeAlReves($a) {
                for ($i=count($a)-1; $i>=0; $i--) {
                    echo $a[$i];
                }
            }
            
            imprimeAlReves(["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"]);
        ?>
    </body>
</html>
