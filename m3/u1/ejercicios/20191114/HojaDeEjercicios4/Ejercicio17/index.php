<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 4 / Ejercicio 17</title>
    </head>
    <body>
        <?php
            if (isset($_GET["enviar"])) {
                $n = 0;

                $n = $_GET["n"];

                echo "<form action=\"index.php\" method=\"get\">";
                
                for ($i=1; $i<=$n; $i++) {
                    echo "<div>";
                    echo "Introduce número $i ";
                    echo "<input name=\"num$i\">";
                    echo "</div>";
                }
                echo "<input name=\"n\" type=\"hidden\" value=\"$n\">";
                echo "<button name=\"enviarNumeros\">Enviar</button>";
                echo "</form>";
            } elseif (isset($_GET["enviarNumeros"])) {
                $n = 0;
                $suma = 0;

                $n = $_GET["n"];
                
                for ($i=1; $i<=$n; $i++) {
                    $num = $_GET["num$i"];
                    $suma+=$num;
                }
                
                echo "<div>";
                echo "La suma es $suma";
                echo "</div>";
                echo "<div>";
                $media = $suma / $n;
                echo "La media es $media";
                echo "</div>";
            } else {
        ?>
                <form action="index.php" method="get">
                    <div>
                        <text>Cuantos números voy a leer </text>
                        <input name="n">
                    </div>
                    <button name="enviar">Enviar</button>
                </form>
        <?php
            }
        ?>  
    </body>
</html>
