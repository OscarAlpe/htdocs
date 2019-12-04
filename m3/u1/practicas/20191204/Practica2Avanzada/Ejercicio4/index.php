<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica 2 avanzada - Ejercicio 4</title>
    </head>
    <body>
        <?php
            $mostrarFormulario = true;
            
            function tirada(&$d1, &$d2) {
            }

            if (!isset($_GET["tirada"])) {
                $_SESSION["tiradas"] = [];
                $_SESSION["numTiradas"] = 0;
                $numTiradas = $_SESSION["numTiradas"];
            } else {
                $_SESSION["numTiradas"]++;
                $numTiradas = $_SESSION["numTiradas"];
                if ($_SESSION["numTiradas"] >= 10) {
                    echo "Resultado";
                    $mostrarFormulario = false;
                }
                $dado1=0;
                $dado2=0;
                tirada($dado1, $dado2);
                $_SESSION["tiradas"][][0] = $dado1;
                $_SESSION["tiradas"][][1] = $dado1;
            }
            
        ?>
        <?php
            if ($mostrarFormulario) {
        ?>
                <form action="index.php" method="get">
                    <div><text>Tirada Nº <?= $numTiradas ?></text></div>
                    <button name="tirada">Tirar dados</button>
                </form>
        <?php
            }
        ?>
    </body>
</html>
