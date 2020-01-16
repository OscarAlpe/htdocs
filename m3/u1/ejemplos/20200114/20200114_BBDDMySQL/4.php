<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 10 - Ejercicio 4</title>
    </head>
    <body>
        <?php
            spl_autoload_register(function ($nombre_clase) {
                include str_replace("\\", DIRECTORY_SEPARATOR, $nombre_clase) . '.php';
            });
            
            use clases\Conexion;
            
            $c = new Conexion();
            $c->seleccionar("videoteca");
            $c->setCampos("*");
            $c->setTabla("actor");
            $c->consultaCamposTabla();
            echo $c->listar_registros();
            $c->setTabla("pelicula");
            $c->consultaCamposTabla();
            echo $c->listar_registros();
            $c->setTabla("director");
            $c->consultaCamposTabla();
            echo $c->listar_registros();
        ?>
    </body>
</html>
