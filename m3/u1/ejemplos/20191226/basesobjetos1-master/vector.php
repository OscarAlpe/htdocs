<?php 
    require_once './ejemplo2/chorrada.php';
    require_once './ejemplo2/Vector.php';
    require_once './ejemplo2/Vector.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         //$a=array(2,2,3,4,5,6,7,2,2);
         
         $a=new Vector(array(2,3,4,5,6,2,3,4,5,6,3,3));
         echo "-" . $a->getMaximo();
         $a->setValores(array(2,2,2,2,2));
         $a->setMaximo();
         echo "-" . $a->getMaximo();
        ?>
    </body>
</html>
