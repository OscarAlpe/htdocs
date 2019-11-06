<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 4 / Ejercicio 2</title>
    </head>
    <body>
        <?php
            if (isset($_GET["enviar"]))
            {
                $Dmillas = 0;
                $Dmetros = 0;
                
                $Dmillas = $_GET["Dmillas"];
                
                $Dmetros = $Dmillas * 1852;
                
                echo "Distancia en metros $Dmetros";
            } else {
        ?>
            <form action="index.php">
                Distancia en millas:
                <input name="Dmillas" type="number">
                <button name="enviar">Enviar</button>
            </form>
        <?php
            }
        ?>
    </body>
</html>
