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
        $a=new Clase3([
            "Nombre"=>"ramon",
            "edad"=>50
        ]);
        echo "Nombre: " . $a->nombre . "<br>";
        echo "Apellidos: " . $a->apellidos . "<br>";
        echo "Edad: " . $a->edad;
        ?>
    </body>
</html>
