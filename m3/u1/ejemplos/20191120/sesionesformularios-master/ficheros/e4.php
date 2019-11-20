<?php
$nombre="datosEmpaquetados.txt";
$formato="A10nombre/A10edad";
$f= fopen($nombre, "r");
$linea=fgets($f);
$salida=unpack($formato,$linea);
var_dump($salida);
