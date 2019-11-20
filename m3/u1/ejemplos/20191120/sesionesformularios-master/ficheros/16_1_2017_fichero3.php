<?php
$nombreArchivo="datos1.txt";
$f=fopen($nombreArchivo,"w+");
$texto="1,2\r\n34,5\r\n7,2";
fwrite($f,$texto);
//rebobino el apuntador
rewind($f);
$vectorLinea=fgetcsv($f);
var_dump($vectorLinea);
fclose($f);
