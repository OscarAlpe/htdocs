<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 4 / Ejercicio 9</title>
    </head>
    <body>
        <?php
            $suma=0;
            echo "<form action=\"index.php\" method=\"get\">";
            echo "<div>";
            echo "Introduce número ";
            echo "<input name=\"num\">";
            if (isset($_GET["enviar"])) {
                $num = 0;

                $num = $_GET["num"];
                if (isset($_GET["suma"])) {
                    $suma = $_GET["suma"];
                }

                if ($num < 0) {
                    $salida = "La suma es:$suma";
                    echo "<div>";
                    echo $salida;
                    echo "</div>";
                } else {
                    $suma += $num;
                    echo "<input name=\"suma\" type=\"hidden\" value=\"$suma\">";
                }
            }
            echo "</div>";
            echo "<button name=\"enviar\">Enviar</button>";
            echo "</form>";
        ?>
    </body>
</html>
