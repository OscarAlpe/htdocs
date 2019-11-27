<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 5 / Ejercicio 17</title>
    </head>
    <body>
        <?php
            function devuelveNumeroVocales($cadena) {
                $resultado=0;
                
                for ($i=0; $i<strlen($cadena); $i++) {
                    if ($cadena[$i] == "a" or $cadena[$i] == "e" or
                        $cadena[$i] == "i" or $cadena[$i] == "o" or
                        $cadena[$i] == "u") {
                        $resultado++;
                    }
                }
                
                return $resultado;
            }
            
            echo devuelveNumeroVocales("ejemplo de clase");
        ?>
    </body>
</html>
