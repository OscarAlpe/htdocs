<?php

// antes de php5
/*function __autoload($nombre_clase) {
    include $nombre_clase . '.php';
}*/

// en php5

spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

?>
<!DOCTYPE html>
<!--
Ejemplo 2016
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $objeto=new Vector([1,2,45,1,2,3,44]);
        echo $objeto->getMaximo();
        ?>
    </body>
</html>
