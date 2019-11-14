<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 4 / Ejercicio 15</title>
    </head>
    <body>
        <?php
            if (isset($_GET["enviar"])) {
                $num = 0;
                $suma = 0;
                $contador = 0;
                $media = 0;
                $salida = "";

                $num = $_GET["num"];
                if (isset($_GET["suma"])) {
                    $suma = $_GET["suma"];
                }

                if (isset($_GET["cuenta"])) {
                    $contador = $_GET["cuenta"];
                }

                if ($num != 0) {
                    $suma += $num;
                    $contador++;
                    echo "<form action=\"index.php\" method=\"get\">";
                    echo "<div>";
                    echo "Introduce número ";
                    echo "<input name=\"num\">";
                    echo "<input name=\"suma\" type=\"hidden\" value=\"$suma\">";
                    echo "<input name=\"cuenta\" type=\"hidden\" value=\"$contador\">";
                    echo "</div>";
                    echo "<button name=\"enviar\">Enviar</button>";
                    echo "</form>";
                } else {
                    $media = $suma / $contador;
                    $salida = "La media es:$media";
                    echo "<div>";
                    echo $salida;
                    echo "</div>";
                }
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
