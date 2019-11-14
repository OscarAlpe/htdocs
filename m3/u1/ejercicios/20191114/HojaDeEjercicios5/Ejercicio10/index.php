<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 5 / Ejercicio 10</title>
    </head>
    <body>
        <?php
            function sumaTresArrays($a1, $a2, $a3) {
                $suma=0;
                
                for ($i=0; $i<count($a1); $i++) {
                    $suma+=$a1[$i]+$a2[$i]+$a3[$i];
                }
                
                return $suma;
            }

            function sumaTresArraysEnArray($a1, $a2, $a3) {
                for ($i=0; $i<count($a1); $i++) {
                    $salida[]=$a1[$i]+$a2[$i]+$a3[$i];
                }
                
                return $salida;
            }
            
            echo "<div>".sumaTresArrays([1,2], [2,4], [3,6])."</div>";
            
            print_r(sumaTresArraysEnArray([1,2], [2,4], [3,6]));
        ?>
    </body>
</html>
