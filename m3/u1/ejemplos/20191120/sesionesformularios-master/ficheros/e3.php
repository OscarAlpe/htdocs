<?php
$usuario="Ramon";
$edad=40;
$nombre="datosEmpaquetados.txt";
$formato="A10A10";
$linea=pack($formato,$usuario,$edad);
$f= fopen($nombre, "w");
fwrite($f, $linea);
fclose($f);

