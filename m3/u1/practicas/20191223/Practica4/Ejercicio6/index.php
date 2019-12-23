<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica 4 - Ejercicio 6</title>
    </head>
    <body>
        <?php
            spl_autoload_register(function ($nombre_clase) {
                include $nombre_clase . '.php';
            });
            
            use clases\TablaMultiplicar;
            
            $t = new TablaMultiplicar();
            
            echo "<pre>";
            foreach ($t->getTabla() as $key=>$value) {
                printf("%3d x %2d = %4d<br />", $t->getNumero(), $key, $value);
            }
            echo "</pre>";
        ?>
    </body>
</html>
