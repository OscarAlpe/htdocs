<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 5 / Ejercicio 6</title>
    </head>
    <body>
        <?php
            function imprimeArray($array) {
                foreach ($array as $valor) {
                    echo "<div>$valor</div>";
                }
            }
            
            imprimeArray([2,4,6]);
        ?>
    </body>
</html>
