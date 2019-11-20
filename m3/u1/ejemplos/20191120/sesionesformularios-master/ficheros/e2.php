<?php

$nombre="datos.txt";
$f= fopen($nombre, "r");
$completo=file($nombre);
$salida=fgetcsv($f);
var_dump($salida);
var_dump($completo);
?>
