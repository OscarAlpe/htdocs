<?php
require_once './Coche.php';
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
        $carro = new Coche(); // Instanciamos la clase Carro
        $carro->color = 'Rojo'; // Llenamos algunas de las propiedades
        $carro->marca = 'Honda';
        $carro->numero_puertas = 4;
        $carro->llenarTanque(10); // utilizamos los metodos
        echo $carro->acelerar();
        echo $carro->acelerar();
        echo $carro->acelerar();
        ?>
    </body>
</html>
