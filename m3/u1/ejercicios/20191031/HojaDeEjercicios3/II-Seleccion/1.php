<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 3 / II - Selección</title>
    </head>
    <body>
        <?php
            $n1=0;
            $n2=0;
            $n3=0;
            
            if (isset($_GET["enviar"])) {
                $n1=$_GET["n1"];
                $n2=$_GET["n2"];
                $n3=$_GET["n3"];
                
                if ($n1==$n2) {
                    echo "no son distintos";
                } elseif ($n1==$n3) {
                    echo "no son distintos";
                } elseif ($n2==$n3) {
                    echo "no son distintos";
                } else {
                    echo "son distintos";
                }
            } else {
        ?>
        <form action="1.php">
            <div>
                Introduce un numero:
                <input type=number" name="n1">
            </div>
            <div>
                Introduce un numero:
                <input type=number" name="n2">
            </div>
            <div>
                Introduce un numero:
                <input type=number" name="n3">
            </div>
            <button name="enviar">Enviar</button>
        </form>
        <?php
            }
        ?>
    </body>
</html>
