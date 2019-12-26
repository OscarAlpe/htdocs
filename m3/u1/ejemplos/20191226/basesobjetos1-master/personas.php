<?php
function __autoload($nombre_clase) {
    include "personas\\" . $nombre_clase . '.php';
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $clientes=array();
            $empresas=array();
            $clientes[]=new Cliente("rosa",43);
            $clientes[]=new Cliente("jose",18);
            $empresas[]=new Empresa();
            
            
        ?>
    </body>
</html>
