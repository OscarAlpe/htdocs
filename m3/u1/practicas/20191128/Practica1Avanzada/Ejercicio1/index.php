<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica 1 avanzada - Ejercicio 1</title>
    </head>
    <body>
        <?php
            $longitud = rand(10, 1000);
            print "<p>Longitud: $longitud</p>";
        ?>
        <svg width="<?= $longitud ?>px" height="10px">
            <?php
                echo '<line x1="1" y1="5" x2="' . $longitud . '" y2="5" stroke="black" stroke-width="10" >';
            ?>
        </svg>
    </body>
</html>
