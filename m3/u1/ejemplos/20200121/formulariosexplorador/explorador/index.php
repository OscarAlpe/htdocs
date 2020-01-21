<?php
    session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            function render($e){
                echo "<div>";
                foreach($e as $elemento){
                    echo "<div>";
                    if(is_dir(implode("/", $_SESSION["ruta"]). "/" . $elemento)){
                        echo "-dir- ";
                        echo "<a href=\"index.php?carpeta=$elemento\">$elemento</a>";
                    }else{
                        echo "-file- $elemento";
                    }
                    echo "</div>";
                }
                echo "</div>";
            }
            // si no he pulsado sobre una carpeta
            if(!isset($_REQUEST["carpeta"])){
                $_SESSION["ruta"]=["."];
                $elementos=scandir($_SESSION["ruta"][0]);
            }else{
                // si he pulsado sobre una carpeta
                //leo la ultima carpeta
                
                $ultimo=$_SESSION["ruta"][count($_SESSION["ruta"])-1];
                if($_REQUEST["carpeta"]==".." && $ultimo!=".." && $ultimo!="."){
                    array_pop($_SESSION["ruta"]);
                }else{
                    $_SESSION["ruta"][]=$_REQUEST["carpeta"];
                }
                $elementos=scandir(implode("/", $_SESSION["ruta"]));
            }
            var_dump($_SESSION["ruta"]);
            render($elementos);
        ?>
    </body>
</html>
