<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 5 / Ejercicio 21</title>
    </head>
    <body>
        <?php
            function opera($n1, $n2, $operacion) {
                $resultado = 0;
                
                switch ($operacion) {
                    case "suma":
                        $resultado = $n1+$n2;
                        break;

                    case "producto":
                        $resultado = $n1*$n2;
                        break;

                    case "resta":
                        $resultado = $n1-$n2;
                        break;

                    default:
                        $resultado = "operación inválida.";
                        break;
                }
                
                return $resultado;
            }
            
            echo "<div>".opera(2, 5, "suma")."</div>";         
            echo "<div>".opera(3, 6, "producto")."</div>";
            echo "<div>".opera(7, 2, "resta")."</div>";
            echo "<div>".opera(33, 56, "divide")."</div>";
        ?>
    </body>
</html>
