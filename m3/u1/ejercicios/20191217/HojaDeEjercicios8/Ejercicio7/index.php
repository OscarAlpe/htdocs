<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 8 - Ejercicio 7</title>
    </head>
    <body>
        <?php
            require_once 'Vehiculo.php';
            
            $coche=new Vehiculo("S-123456-AB");
            var_dump($coche);
            
            $cocheRojo=new Vehiculo("S-123456-AB", "rojo");
            var_dump($cocheRojo);
            
            $cocheVerdeEncendido=new Vehiculo("S-123456-AB", "verde", true);
            var_dump($cocheVerdeEncendido);
           
        ?>
    </body>
</html>
