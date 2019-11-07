<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 4 / Ejercicio 7</title>
    </head>
    <body>
        <form action="index.php" method="get">
            <div>
                Introduce horas
                <input name="horas" type="number">
            </div>
            <div>
                Introduce precio hora
                <input name="precioHora" type="number">
            </div>
            <div>
                Introduce nombre
                <input name="nombre" type="text">
            </div>
            <button name="calcularSalario">Calcular salario</button>
        </form>
        <?php
            if (isset($_GET["calcularSalario"])) {
                $horas = 0;
                $precioHora = 0;
                $nombre = "";
                $salario = 0;
                
                $horas = $_GET["horas"];
                $precioHora = $_GET["precioHora"];
                $nombre = $_GET["nombre"];
                
                if ($horas <= 40) {
                    $salario = $horas * $precioHora;
                } else {
                    $salario = $precioHora * 40 + (1.5 * $precioHora * ($horas - 40));
                }
                
                echo "<div>";
                echo "Salario $salario";
                echo "</div>";
            }
        ?>
    </body>
</html>
