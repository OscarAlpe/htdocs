<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 4 / Ejercicio 12</title>
    </head>
    <body>
        <?php
            if (isset($_GET["enviar"])) {
                $horasTrabajadas = 0;
                $tarifaHoraria = 0;
                $tasaImpuestos = 0;
                $pagaBruta = 0;
                $impuestos = 0;
                $pagaNeta = 0;
                
                $horasTrabajadas = $_GET["horasTrabajadas"];
                $tarifaHoraria = $_GET["tarifaHoraria"];
                $tasaImpuestos = $_GET["tasaImpuestos"];
                
                $pagaBruta = $horasTrabajadas * $tarifaHoraria;
                $impuestos = $pagaBruta * $tasaImpuestos / 100;
                $pagaNeta = $pagaBruta - $impuestos;
                                
                echo "Paga Bruta=$pagaBruta Impuestos=$impuestos Paga Neta=$pagaNeta";
            } else {
        ?>
            <form action="index.php" method="get">
                 <div>
                     <text>Introduce horas trabajadas </text>
                     <input name="horasTrabajadas">
                 </div>
                 <div>
                     <text>Introduce tarifa horaria </text>
                     <input name="tarifaHoraria">
                 </div>
                 <div>
                     <text>Introduce tasa de impuestos (%) </text>
                     <input name="tasaImpuestos">
                 </div>
                 <button name="enviar">Enviar</button>
             </form>
        <?php
            }
        ?>    </body>
</html>
