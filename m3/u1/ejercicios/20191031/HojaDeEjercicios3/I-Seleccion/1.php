<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 3 / I - Selección</title>
    </head>
    <body>
        <?php
            $numero=0;
            $numero1=0;
            $salida="";
            
            if (isset($_GET["enviar"])) {
                $numero=$_GET["numero"];
                $numero1=$_GET["numero1"];
                
                if ($numero>$numero1) {
                    $salida="tipo 1";
                } elseif ($numero==$numero1) {
                    $salida="tipo 2";
                } else {
                    $salida="tipo3";
                    if ($numero1>10) {
                        $salida="tipo 31";
                    } else {
                        $salida="tipo 32";
                    }
                }
                
                echo $salida;
            } else {
        ?>
        <form action="1.php">
            <div>
                Introduce un numero:
                <input type=number" name="numero">
            </div>
            <div>
                Introduce un numero:
                <input type=number" name="numero1">
            </div>
            <button name="enviar">Enviar</button>
        </form>
        <?php
            }
        ?>
    </body>
</html>
