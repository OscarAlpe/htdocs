<?php
    
    $nombre=$_GET["nombre"];
    $tipo=$_GET["tipo"];
    $foto1= file_get_contents($nombre);
    header("Content-Type: images/$tipo");
    echo $foto1;

?>

