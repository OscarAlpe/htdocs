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
            
            use clases\Conexion;
                                   
            $c = new Conexion();
            
            $c->consulta("USE videoteca");
            
            $c->castellano();
            
            $r = $c->consulta("SELECT * FROM actor");
            var_dump($r);
            $a = $c->coge_todos(MYSQLI_ASSOC);
            var_dump($a);
            
            $c->setCampos("id, nombre, apellidos");
            $c->setTabla("actor");
            $c->consultaCamposTabla();
            echo $c->listar_registros();
        ?>
    </body>
</html>
