<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 4 / Ejercicio 10</title>
    </head>
    <body>
        <?php
            if (isset($_GET["enviar"])) {
                $num = 0;
                $oculto = 123;
                
                $num = $_GET["num"];
                
                if ($num!=$oculto) {
                    if ($num>$oculto) {
                        $salida = "Te pasas";
                    } else {
                        $salida = "No llegas";
                    }
                    echo "<form action=\"index.php\" method=\"get\">";
                    echo "<div>";
                    echo "Introduce número ";
                    echo "<input name=\"num\">";
                    echo "</div>";
                    echo "<button name=\"enviar\">Enviar</button>";
                    echo "</form>";
                } else {
                    $salida = "FIN";
                }
                
                echo $salida;
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
        ?>
    </body>
</html>
