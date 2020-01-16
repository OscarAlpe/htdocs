<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 10 - Ejercicio 3</title>
    </head>
    <body>
        <?php
            spl_autoload_register(function ($nombre_clase) {
                include str_replace("\\", DIRECTORY_SEPARATOR, $nombre_clase) . '.php';
            });
            
            use clases\Conexion;
                                   
            $c = new Conexion();
            
            $c->consulta("USE videoteca");
            
            $c->castellano();
            
            $r = $c->consulta("SELECT * FROM actor");
            var_dump($r);
            $a = $c->coge_todos(MYSQLI_ASSOC);
            var_dump($a);
            
            $c2 = new Conexion();
            $c2->seleccionar("videoteca");
            $c2->setCampos("*");
            $c2->setTabla("pelicula");
            $c2->consultaCamposTabla();
            echo $c2->listar_registros();
        ?>
    </body>
</html>
