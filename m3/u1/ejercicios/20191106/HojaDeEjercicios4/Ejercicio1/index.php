<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 4 / Ejercicio 1</title>
    </head>
    <body>
        <?php
            if (isset($_GET["enviar"]))
            {
                $base = 0;
                $altura = 0;
                $perimetro = 0;
                $area = 0;
                
                $base = $_GET["base"];
                $altura = $_GET["altura"];
                
                $perimetro = 2 * $base + 2 * $altura;
                $area = $base * $altura;
                
                echo "Area $area Perimetro $perimetro";
            } else {
        ?>
            <form action="index.php" method="get">
                <div>
                    Introduce la BASE
                    <input name="base" type="number">
                </div>
                <div>
                    Introduce la ALTURA
                    <input name="altura" type="number">
                </div>
                <button name="enviar">Enviar</button>
            </form>
        <?php
            }
        ?>
    </body>
</html>
