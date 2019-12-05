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
                $d1 = rand(1, 6);
                $d2 = rand(1, 6);
            }

            if (!isset($_GET["tirada"])) {
                $_SESSION["tiradas"] = [];
                $_SESSION["sumaTiradas"] = [];
                $_SESSION["numTiradas"] = 0;
                $numTiradas = $_SESSION["numTiradas"];
                $verTirada = "hidden";
                $textoBoton = "1ª Tirada";
            } else {
                $verTirada = "visible";
                $_SESSION["numTiradas"]++;
                $numTiradas = $_SESSION["numTiradas"];
                $textoBoton = "Tirar dados";
                if ($_SESSION["numTiradas"] >= 10) {
                    $textoBoton = "Ver resultado";
                }
                if ($_SESSION["numTiradas"] >= 11) {
                    echo "Resultado:";
                    $mostrarFormulario = false;
                    foreach ($_SESSION["tiradas"] as $i=>$v) {
                        $suma = $v[0] + $v[1];
                        echo "<div>";
                        echo '<img src="'.$v[0].'.svg">';
                        echo '<img src="'.$v[1].'.svg">';
                        echo "</div>";
                        echo "<span>";
                        echo "    Total:";
                        echo "    <span style=\"border: 1px solid black; font-size: 40px\">";
                        echo "       &nbsp;$suma&nbsp;";
                        echo "    </span>";
                        echo "</span>";
                    }
                    session_unset();
                    unset($_GET["tirada"]);
                }
                $dado1 = 0;
                $dado2 = 0;
                tirada($dado1, $dado2);
                $_SESSION["tiradas"][$numTiradas - 1][0] = $dado1;
                $_SESSION["tiradas"][$numTiradas - 1][1] = $dado2;
                $_SESSION["sumaTiradas"][$numTiradas - 1] = $dado1 + $dado2;
            }
            
        ?>
        <?php
            if ($mostrarFormulario) {
        ?>
                <form action="index.php" method="get">
                    <div><text style="visibility: <?= $verTirada ?>">Tirada Nº <?= $numTiradas ?></text></div>
                    <button name="tirada"><?= $textoBoton ?></button>
                </form>
        <?php
            }
        ?>
    </body>
</html>
