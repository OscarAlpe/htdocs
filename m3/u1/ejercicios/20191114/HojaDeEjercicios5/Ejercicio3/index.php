<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 5 / Ejercicio 3</title>
    </head>
    <body>
        <?php
            function imprimeDesdeHasta($desde, $hasta) {
                for ($i=$desde; $i<=$hasta; $i++) {
                    echo "<div>$i</div>";
                }
            }
            
            imprimeDesdeHasta(5, 15);
        ?>
    </body>
</html>
