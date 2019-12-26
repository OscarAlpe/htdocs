<?php


/*function __autoload($nombre_clase) {
    include $nombre_clase . '.php';
}*/
  
spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

use herencia\Ambulancia;

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $objeto1 = new Ambulancia();
        $objeto1->pintar();
        echo $objeto1->getNombre();
        echo $objeto1->pintarPadre();
     

        ?>
    </body>
</html>
