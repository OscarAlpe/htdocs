<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica 4 - Ejercicio 3</title>
    </head>
    <body>
        <?php
            spl_autoload_register(function ($nombre_clase) {
                include $nombre_clase . '.php';
            });
            
            if (!function_exists('stats_standard_deviation')) {
                /**
                 * This user-land implementation follows the implementation quite strictly;
                 * it does not attempt to improve the code or algorithm in any way. It will
                 * raise a warning if you have fewer than 2 values in your array, just like
                 * the extension does (although as an E_USER_WARNING, not E_WARNING).
                 * 
                 * @param array $a 
                 * @param bool $sample [optional] Defaults to false
                 * @return float|bool The standard deviation or false on error.
                 */
                function stats_standard_deviation(array $a, $sample = false) {
                    $n = count($a);
                    if ($n === 0) {
                        trigger_error("The array has zero elements", E_USER_WARNING);
                        return false;
                    }
                    if ($sample && $n === 1) {
                        trigger_error("The array has only 1 element", E_USER_WARNING);
                        return false;
                    }
                    $mean = array_sum($a) / $n;
                    $carry = 0.0;
                    foreach ($a as $val) {
                        $d = ((double) $val) - $mean;
                        $carry += $d * $d;
                    };
                    if ($sample) {
                       --$n;
                    }
                    return sqrt($carry / $n);
                }
            }
            
            use clases\Numero;
            
            $a = [2 , 4, 2, 8 , 10, 12, 8, 16, 18, 20];
            
            $n = new Numero($a);
            
            echo "La media aritmetica es:" . $n->getMediaAritmetica() . "<br />";
            
            echo "La moda es: <br />";
            
            foreach ($n->getModa() as $value) {
                echo "$value<br />";
            }

            echo "La mediana es:" . $n->getMediana() . "<br />";
            
            echo "La desviacion típica es:" . $n->getDesviacionTipica() . "<br />";
            
        ?>
    </body>
</html>
