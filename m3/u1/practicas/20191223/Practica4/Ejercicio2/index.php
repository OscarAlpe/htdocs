<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica 4 - Ejercicio 2</title>
    </head>
    <body>
        <?php
            spl_autoload_register(function ($nombre_clase) {
                include $nombre_clase . '.php';
            });
            
            use clases\Palabra;
            
            if (isset($_GET["enviar"])) {
                $palabra = "";
                
                if (isset($_GET["palabra"])) {
                    $palabra = $_GET["palabra"];
                }
                
                $p = new Palabra($palabra);
                echo "La palabra tiene " . $p->vocales() ." vocales.";
            } else {
        ?>
        <form action="index.php" method="get">
            <div>
                Introduce palabra
                <input type="text" name="palabra">
            </div>
            <div>
                <button name="enviar">Enviar</button>
            </div>
        </form>
        <?php
            }
        ?>
    </body>
</html>
