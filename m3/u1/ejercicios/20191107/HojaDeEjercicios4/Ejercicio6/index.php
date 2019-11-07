<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 4 / Ejercicio 6</title>
    </head>
    <body>
        <?php
            if (isset($_GET["enviar"])) {
                $Num = 0;
                $Res = 0;
                
                $Num = $_GET["Num"];
                
                $Res = $Num % 2;
                
                if ($Res == 0) {
                    echo "El número es par";
                } else {
                    echo "El número es impar";
                }
            } else {
        ?>
                <form action="index.php" method="get">
                    Introduzca un número
                    <input name="Num" type="number">
                    <button name="enviar">Enviar</button>
                </form>
        <?php
            }
        ?>
    </body>
</html>
