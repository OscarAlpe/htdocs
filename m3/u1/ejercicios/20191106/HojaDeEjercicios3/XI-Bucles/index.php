<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 3 / XI - Bucles</title>
    </head>
    <body>
        <?php
            if (isset($_GET["enviar_num_notas"]))
            {
                $nota = [];
                $num_notas = 0;
                $suma = 0;
                $media = 0;
                
                $num_notas = $_GET["num_notas"];
        ?>
                <form action="index.php" method="get">
       <?php     
                for ($i=1; $i<=$num_notas; $i++)
                {
                    echo "<div>";
                    echo "Introduce número de nota $i";
                    echo "<input name=\"nota_$i\" type=\"number\">";
                    echo "</div>";
                }
                echo "<input name=\"num_notas\" type=\"hidden\" value=\"$num_notas\">";
       ?>                   
                    <button name="enviar_notas">Enviar</button>
                </form>
        <?php        
            } elseif (isset($_GET["enviar_notas"])) {
                $num_notas = 0;
                $suma = 0;
                $media = 0;

                $num_notas = $_GET["num_notas"];
                for ($i=1; $i<=$num_notas; $i++)
                {
                    $indice = "nota_$i";
                    $suma = $suma + $_GET[$indice];
                }

                $media = $suma / $num_notas;
                
                echo "La media es $media";
            } else {
        ?>
            <form action="index.php" method="get">
                Introduce número de notas
                <input name="num_notas" type="number">
                <button name="enviar_num_notas">Enviar</button>
            </form>
        <?php
            }
        ?>
    </body>
</html>
