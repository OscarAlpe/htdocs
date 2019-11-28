<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 5 / Ejercicio 22</title>
    </head>
    <body>
        <?php
            function opera_array($num_array, $operacion) {
                $resultado = 0;
                
                switch ($operacion) {
                    case "suma":
                        foreach ($num_array as $valor) {
                            $resultado += $valor;
                        }
                        
                        break;

                    case "producto":
                        foreach ($num_array as $key => $valor) {
                            if ($key == 0) {
                                $resultado = $valor;
                            } else {
                                $resultado *= $valor;
                            }                        }

                        break;

                    case "resta":
                        foreach ($num_array as $key => $valor) {
                            if ($key == 0) {
                                $resultado = $valor;
                            } else {
                                $resultado -= $valor;
                            }
                        }

                        break;

                    default:
                        $resultado = "operación inválida.";
                        break;
                }
                
                return $resultado;
            }
            
            echo "<div>" . opera_array([2, 5, 3], "suma") . "</div>";         
            echo "<div>" . opera_array([3, 6, 2], "producto") . "</div>";
            echo "<div>" . opera_array([7, 2, 1], "resta") . "</div>";
            echo "<div>" . opera_array([33, 56], "divide") . "</div>";        
        ?>
    </body>
</html>
