<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 3 / VIII - Bucle do while</title>
    </head>
    <body>
        <?php
            $c=0;
            
            if (isset($_GET["enviar"])) {
                $c=$_GET["c"];
                do {
                    echo "<div>$c</div>";
                    $c=$c-2;
                } while ($c>10);
            } else {
        ?>
            <form action="index.php" method="get">
                introduce un numero
                <input type="number" name="c">
                <button name="enviar">Enviar</button>
            </form>
        <?php    
            }
        ?>
    </body>
</html>
