<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica 1 avanzada - Ejercicio 6</title>
    </head>
    <body>
        <?php
            function calculoColor() {
                return "rgb(".rand(0, 255).",".rand(0, 255).",".rand(0, 255).")";
            }
            
            $color = calculoColor();
        ?>
        <p>Color: <?= $color ?></p>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" style="display:block;margin:0px auto">
        <circle cx="50" cy="50" r="50" fill="<?= $color ?>" />
        </svg>
    </body>
</html>
