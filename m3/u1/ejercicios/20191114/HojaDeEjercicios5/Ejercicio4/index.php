<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 5 / Ejercicio 4</title>
    </head>
    <body>
        <?php
            function sumaVariable(...$numeros) {
                $suma=0;
                
                foreach ($numeros as $valor) {
                    $suma+=$valor;
                }
                
                echo "<div>La suma es $suma</div>";
            }
            
            sumaVariable(1, 2, 3, 4, 5 , 6, 7, 8, 9, 10);
            
            sumaVariable(2, 4, 6);
        ?>
    </body>
</html>
