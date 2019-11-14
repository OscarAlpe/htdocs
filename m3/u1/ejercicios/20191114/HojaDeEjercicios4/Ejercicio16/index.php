<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 4 / Ejercicio 16</title>
    </head>
    <body>
        <?php
            $total=0;
            if (isset($_GET["enviar"])) {
                $num = 0;

                $num = $_GET["num"];
                
                if (isset($_GET["total"])) {
                    $total = $_GET["total"];
                }

                if ($num == 0) {
                    $total += 1;
                }
                
                echo '<form action="index.php" method="get">';
                    echo '<div>';
                        echo '<text>Introduce número </text>';
                        echo '<input name="num">';
                        echo '<input name="total" type="hidden" value="' . $total . '">';
                    echo '</div>';
                    echo '<button name="enviar">Enviar</button>';
                    echo '<button name="terminar">Terminar</button>';
                echo '</form>';

            } elseif (isset($_GET["terminar"])) {
                $total = 0;
                
                if (isset($_GET["total"])) {
                    $total = $_GET["total"];
                }
                
                $salida = "El numero de ceros es:$total";
                echo "<div>";
                echo $salida;
                echo "</div>";
            } else {
        ?>
                <form action="index.php" method="get">
                    <div>
                        <text>Introduce número </text>
                        <input name="num">
                    </div>
                    <button name="enviar">Enviar</button>
                </form>
        <?php
            }
        ?>    </body>
</html>
