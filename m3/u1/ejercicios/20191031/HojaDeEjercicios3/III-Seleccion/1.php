<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 3 / III - Selección</title>
    </head>
    <body>
        <?php
            if (isset($_GET["enviar"])) {
                $numero=0;
                $salida="";

                $numero=$_GET["numero"];
                
                switch ($numero) {
                    case 1:
                        $salida = "Lunes";
                        break;
                    case 2:
                        $salida = "Martes";
                        break;
                    case 3:
                        $salida = "Miercoles";
                        break;
                    case 4:
                        $salida = "Jueves";
                        break;
                    case 5:
                        $salida = "Viernes";
                        break;
                    case 6:
                        $salida = "Sabado";
                        break;
                    case 7:
                        $salida = "Domingo";
                        break;

                    default:
                        $salida = "no valido";
                        break;
                }
                
                echo $salida;
            } else {
        ?>
            <form action="1.php" method="get">
                Introduce un numero:
                <input type="number" name="numero">
                <button name="enviar">Enviar</button>
            </form>
        <?php
            }
        ?>
    </body>
</html>
