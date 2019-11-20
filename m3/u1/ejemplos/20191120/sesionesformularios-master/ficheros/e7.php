<?php

$f= fopen("datos.txt", "r");
$linea=fgets($f);
fseek($f, (strlen($linea)-1)*5,SEEK_CUR);
var_dump(fgets($f));

