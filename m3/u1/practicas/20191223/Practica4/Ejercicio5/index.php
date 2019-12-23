<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica 4 - Ejercicio 5</title>
    </head>
    <body>
        <?php
            spl_autoload_register(function ($nombre_clase) {
                include $nombre_clase . '.php';
            });
            
            use clases\CalculaDia;
            
            $d = new CalculaDia();
            Echo "Hoy es " . $d->getDia_semana();
        ?>
    </body>
</html>
