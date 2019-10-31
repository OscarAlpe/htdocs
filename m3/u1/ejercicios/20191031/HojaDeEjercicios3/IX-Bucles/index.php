<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 3 / IX - Bucles</title>
    </head>
    <body>
        <?php
            if (isset($_GET["enviar"])) {
                $n=0;
                $suma=0;
                
                $n=$_GET["n"];
                $n--;
                
                while ($n>0) {
                    $suma=$suma+$n;
                    $n=$n-2;
                }
                
                echo "Suma=$suma";
            } else {
        ?>
            <form action="index.php" method="get">
                Introducir numero
                <input name="n" type="number">
                <button name="enviar">Enviar</button>
            </form>
        <?php
            }
        ?>
    </body>
</html>
