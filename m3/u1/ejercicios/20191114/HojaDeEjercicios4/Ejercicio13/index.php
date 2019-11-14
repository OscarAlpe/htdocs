<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 4 / Ejercicio 13</title>
    </head>
    <body>
        <?php
            $contador=1;
            $suma=0;
            
        
            while ($contador <= 100) {
                $suma+=$contador;
                $contador++;
            }
            
            echo "La suma es:$suma";
        ?>
    </body>
</html>
