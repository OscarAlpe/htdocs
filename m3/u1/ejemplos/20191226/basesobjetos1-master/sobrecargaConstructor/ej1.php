<?php
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
        $a=new Clase1("Ramon");
        echo "Nombre: " . $a->nombre ."<br>";
        echo "Apellidos: " . $a->apellidos;
        //echo "Nombre: " . $a["nombre"]; //Fatal Error

        ?>
    </body>
</html>
