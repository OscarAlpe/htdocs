<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 5 / Ejercicio 19</title>
    </head>
    <body>
        <?php
            function devuelveArrayOrdenadoMenorMayor($a) {
                $resultado = $a;
                
                if (count($a) == 0) {
                    $ordenado = true;
                } else {
                    $ordenado = false;
                }
                
                while (!$ordenado) {
                    $i = count($resultado) - 1;
                    $ordenado = true;
                    
                    while ($i > 0) {
                        if ($resultado[$i] < $resultado[$i-1]) {
                            $tmp = $resultado[$i-1];
                            $resultado[$i-1] = $resultado[$i];
                            $resultado[$i] = $tmp;
                            $ordenado = false;
                        }
                        
                        $i--;
                    }
                }
                
                
                return $resultado;
            }
            
            var_dump(devuelveArrayOrdenadoMenorMayor([9, 5, 3, 7, 2, 1, 8]));
        ?>
    </body>
</html>
