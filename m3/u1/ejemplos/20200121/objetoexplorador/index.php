<?php
    session_start();
    spl_autoload_register(function ($nombre_clase) {
        include str_replace("\\", DIRECTORY_SEPARATOR, $nombre_clase) . '.php';
    });
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo Objeto Explorador</title>
    </head>
    <body>
        <?php
            use clases\Explorador;
            
            $directorio = "";
            //var_dump($_SESSION["directorio"]);
        
            if (isset($_GET["dir"])) {
                $directorio = $_GET["dir"];
                $_SESSION["directorio"][] = $directorio;
            } else {
                $directorio = ".";
            }
            
            if (isset($_SESSION["directorio"])) {
                if (count($_SESSION["directorio"]) > 3) {
                    foreach ($_SESSION["directorio"] as $key=>$valor) {
                        unset($_SESSION["directorio"][$key]);
                        if (count($_SESSION["directorio"]) < 4) {
                            break;
                        }
                    }
                }

                foreach ($_SESSION["directorio"] as $valor) {
                    echo "<div>" . $valor . "</div>";
                }
            }

            
            $e = new Explorador($directorio);
            echo $e->lista_directorio();
           
        ?>
    </body>
</html>
