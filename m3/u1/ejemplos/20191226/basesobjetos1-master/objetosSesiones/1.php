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
        <title></title>
    </head>
    <body>
        <?php
        if(!isset($_REQUEST["objeto"])){
            $_SESSION["objeto"]= new Hombre("ramon",12);
        }else{
            $_SESSION["objeto"]= unserialize($_SESSION["objeto"]);
            $_SESSION["objeto"]->setEntradas();
        }
        
        echo $_SESSION["objeto"];
        
        $_SESSION["objeto"]= serialize($_SESSION["objeto"]);
        ?>
    </body>
</html>
