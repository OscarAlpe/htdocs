<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 5 / Ejercicio 20</title>
        <?php
            function ejercicio9($idE, $idS) {
                $salida= file_get_contents("salida.html");
                $doc = new DomDocument();
                $doc->loadHTML($salida);
                $divE = $doc->getElementById($idE);
                if($divE) {
                    $divS = $doc->getElementById($idS);
                    if ($divS) {
                        $divS->textContent = strtoupper($divE->textContent);
                    }
                }
                
                return $doc->saveHTML();
            }
            
            $salida = ejercicio9("entrada", "salida");
        ?>
    </head>
    <body>
        <?= $salida ?>
    </body>
</html>
