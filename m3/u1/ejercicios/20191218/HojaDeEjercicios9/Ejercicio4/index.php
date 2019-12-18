<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 9 - Ejercicio 4</title>
    </head>
    <body>
        <?php
            spl_autoload_register(function ($nombre_clase) {
                include $nombre_clase . '.php';
            });
            
            use clases\Cadena;
            
            $a=new Cadena("Esto es una prueba camión");
            echo "Longitud:" . $a->longitud() . "<br />";
            echo "Número de vocales:" . $a->numeroVocales() . "<br />";
            echo "a se repite " . $a->repiteVocal("a") . " veces.";
        ?>
    </body>
</html>
