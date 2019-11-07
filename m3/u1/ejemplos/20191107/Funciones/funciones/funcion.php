<?php

function miFuncion1() {
    $salida="";
    
    $salida="Yo soy";
    $salida.="<br>";
    $salida.="Tu eres tu";
    
    return $salida;
}

function miFuncion() {
    echo "Hola mundo<br>";
    echo "Segunda línea<br>";
}

miFuncion();

echo miFuncion1();
?>