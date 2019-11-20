<?php

$nombreArchivo="datos.txt";
$f= fopen($nombreArchivo, "r");
// leo primera linea
$lineaContenido=fgets($f);
// imprimo primera linea
echo $lineaContenido;

// coloco el manejador al principio del archivo
rewind($f);



while(($lineaContenido=fgets($f))!== FALSE){
  echo $lineaContenido;  
}

fclose($f);
