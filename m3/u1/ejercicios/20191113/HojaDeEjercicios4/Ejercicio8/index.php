<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 4 / Ejercicio 8</title>
    </head>
    <body>
        <?php
           if (isset($_GET["enviar"])) {
               $numeroA = 0;
               $numeroB = 0;
               $numeroC = 0;
               
               $numeroA = $_GET["numeroA"];
               $numeroB = $_GET["numeroB"];
               $numeroC = $_GET["numeroC"];
               
               if (($numeroA + $numeroB) == $numeroC) {
                   $salida = "iguales";
               } elseif (($numeroA + $numeroC) == $numeroB) {
                   $salida = "iguales";
               } elseif (($numeroB + $numeroC == $numeroA)) {
                   $salida = "iguales";
               } else {
                   $salida = "distintas";
               }
               
               echo "<div>";
               echo $salida;
               echo "</div>";
           }
        ?>
        <form action="index.php" method="get">
            <div>
                Introduce número A
                <input name="numeroA">
            </div>
            <div>
                Introduce número B
                <input name="numeroB">
            </div>
            <div>
                Introduce número C
                <input name="numeroC">
            </div>
            <button name="enviar">Enviar</button>
        </form>
    </body>
</html>
