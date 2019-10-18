<?php
    $num = 0;
    
    $num = $_GET["num"];
    
    if ($num < 0) {
        $salida = "Es negativo";
    } else {
        $salida = "Es positivo";
    }
    
    echo $salida;
