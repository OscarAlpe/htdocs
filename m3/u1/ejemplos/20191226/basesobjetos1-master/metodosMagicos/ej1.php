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
            //$o=new Disco("h"); //fatal error
            $o=new Disco(["nombre"=>"ramon","Fabricante"=>"Toshiba"]);
            var_dump($o);
            echo "<br>";
            $o->getmio("uno",2); // no existe metodo
            Disco::madreMia(1,2,3);
            $o->valor=10;
            $o->setValor(10);
            echo $o->valor;
            unset($o); //llamada al destructor
        ?>
    </body>
</html>
