<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica 1 avanzada - Ejercicio 5</title>
    </head>
    <body>
        <?php
            function calculoColor() {
                return "#".rand(0, 255).rand(0, 255).rand(0, 255);
            }
        ?>
        <div style="width:50px;height:50px;border-radius:50px;background-color:<?= calculoColor() ?>"></div>
    </body>
</html>
