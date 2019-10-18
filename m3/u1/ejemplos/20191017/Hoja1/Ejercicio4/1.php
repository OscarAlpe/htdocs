<?php
    $caracter = "";
    $salida = "";
    
    $caracter = $_GET["caracter"];
    
    if ($caracter == "a") {
        $salida = "Es a";
    } elseif ($caracter == "b") {
        $salida = "Es b";
    } else {
        $salida = "no es ni a ni b";
    }
    
    echo $salida;