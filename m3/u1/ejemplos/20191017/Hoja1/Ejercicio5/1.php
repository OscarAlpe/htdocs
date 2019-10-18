<?php
    $num = 0;
    $salida = "";
    
    $num = $_GET["num"];
    
    if ($num % 2 == 0) {
        $salida = "Es par";
    } else {
        $salida = "Es impar";
    }
    
    echo $salida;
