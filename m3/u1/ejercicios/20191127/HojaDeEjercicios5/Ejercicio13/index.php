<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 5 / Ejercicio 13</title>
    </head>
    <body>
        <?php
            function imprime3Divs($a) {
                foreach ($a as $value) {
                    echo "<div style=\"background-color:$value; height:100px\"></div>";
                }
            }
            
            imprime3Divs(["red", "yellow", "orange"]);
        ?>
    </body>
</html>
