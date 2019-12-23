<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica 3 avanzada</title>
    </head>
    <body>
        <?php
            spl_autoload_register(function ($nombre_clase) {
                include $nombre_clase . '.php';
            });

            use clases\Cifrado;
            
            $c = new Cifrado("Esto es una prueba", 2);
        ?>
    </body>
</html>
