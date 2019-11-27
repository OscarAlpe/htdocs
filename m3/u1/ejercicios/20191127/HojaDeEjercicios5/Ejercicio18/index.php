<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 5 / Ejercicio 18</title>
    </head>
    <body>
        <?php
            function devuelveArrayVocales($cadena) {
                $resultado = [];
                
                for ($i=0; $i<strlen($cadena); $i++) {
                    if ($cadena[$i] == "a" or $cadena[$i] == "e" or
                        $cadena[$i] == "i" or $cadena[$i] == "o" or
                        $cadena[$i] == "u") {
                        $resultado[] = $cadena[$i];
                    }
                }
                
                return $resultado;
            }
            
            var_dump(devuelveArrayVocales("ejemplo de clase"));
        ?>
    </body>
</html>
