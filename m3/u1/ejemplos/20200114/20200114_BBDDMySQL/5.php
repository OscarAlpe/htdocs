<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 10 - Ejercicio 5</title>
    </head>
    <body>
        <?php
            spl_autoload_register(function ($nombre_clase) {
                include str_replace("\\", DIRECTORY_SEPARATOR, $nombre_clase) . '.php';
            });
            
            use clases\Conexion;

        ?>
    </body>
</html>
