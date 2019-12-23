<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica 4 - Ejercicio 4</title>
    </head>
    <body>
        <?php
            spl_autoload_register(function ($nombre_clase) {
                include $nombre_clase . '.php';
            });
            
            use clases\Triangulo;
            
            $t = new Triangulo(5, 7 , 19);
            if ($t->getArea() != false) {
                echo "El perímetro es " . $t->getPerimetro() . "<br />";
                echo "El área es " . $t->getArea() . "<br />";
            } else {
                echo "Los lados no forman un triángulo.";
            }
            
        ?>
    </body>
</html>
