<?php
$nombreArchivo="datos.txt";

// comprobar si un fichero existe
if(file_exists($nombreArchivo)){
  echo "existe";  
}else{
  echo "no existe";  
}

// paso el contenido del archivo a un array
$archivoContenido=file($nombreArchivo);

var_dump($archivoContenido);

//paso el contenido del archivo a una cadena de caracteres
$archivoContenido= file_get_contents($nombreArchivo);

var_dump($archivoContenido);
echo $archivoContenido;
