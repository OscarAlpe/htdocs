<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            spl_autoload_register(function ($nombre_clase) {
                include $nombre_clase . '.php';
            });
            
            use clases\Persona;
            use clases\Estudiante;
            use clases\Profesor;
            use clases\Materias;
        ?>
    </body>
</html>
