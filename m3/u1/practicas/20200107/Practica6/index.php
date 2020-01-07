<?php

    session_start();
    spl_autoload_register(function ($nombre_clase) {
        include $nombre_clase . '.php';
    });

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Práctica 6</title>
    </head>
    <body>
        <?php
            if (isset($_GET["aceptar"])) {
                $coordenadas_hospitales = "";
                $coordenadas_restaurantes = "";
                $coordenadas_paradasAutobuses = "";
                
                if (isset($_GET["coordenadas_hospitales"])) {
                    $coordenadas_hospitales = $_GET["coordenadas_hospitales"];
                }
                if (isset($_GET["coordenadas_restaurantes"])) {
                    $coordenadas_restaurantes = $_GET["coordenadas_restaurantes"];
                }
                if (isset($_GET["coordenadas_paradasAutobuses"])) {
                    $coordenadas_paradasAutobuses = $_GET["coordenadas_paradasAutobuses"];
                }
            } else {
        ?>
                <form action="index.php" method="get">
                    <div>
                        <label for="inputHospitales">Coordenadas de Hospitales</label>
                        <input id="inputHospitales" name="coordenadas_hospitales" type="text">
                    </div>
                    <div>
                        <label for="inputRestaurantes">Coordenadas de Restaurantes</label>
                        <input id="inputRestaurantes" name="coordenadas_restaurantes" type="text">
                    </div>
                    <div>
                        <label for="inputParadasAutobuses">Coordenadas de Paradas de Autobuses</label>
                        <input id="inputParadasAutobuses" name="coordenadas_paradasAutobuses" type="text">
                    </div>
                    <div>
                        <button name="aceptar">Aceptar</button>
                    </div>
                </form>
        <?php
            }
        ?>
    </body>
</html>
