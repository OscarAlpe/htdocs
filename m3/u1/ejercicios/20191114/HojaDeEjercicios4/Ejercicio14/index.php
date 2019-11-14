<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 4 / Ejercicio 14</title>
    </head>
    <body>
        <?php
            $suma=0;
            $numero=2;
            
            do {
                $suma=$suma+$numero;
                $numero+=2;
            } while ($numero <= 1000);
            
            echo "La suma es $suma";
        ?>
    </body>
</html>
