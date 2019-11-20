<?php
$nombreArchivo="datos2.txt";
$f=fopen($nombreArchivo,"w+");
/*$vectorGrabar=[
    [1,2],
    [34,5],
    [7,2]
];
fputcsv($f,$vectorGrabar[0]);
fputcsv($f,$vectorGrabar[1]);
fputcsv($f,$vectorGrabar[2]);*/

fputcsv($f,[1,2]);
fputcsv($f,[34,5]);
fputcsv($f,[7,2]);

rewind($f);

$vectorLinea=fgetcsv($f);
var_dump($vectorLinea);
fclose($f);