<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 5 / Ejercicio 5</title>
    </head>
    <body>
        <?php
            function productoTresNumeros($uno, $dos, $tres) {
                $producto = 0;
                $producto = $uno * $dos * $tres;
                echo "El producto es $producto";
            }
            
            productoTresNumeros(2, 4, 5);
        ?>
    </body>
</html>
