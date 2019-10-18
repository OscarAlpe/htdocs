<?php
    $num1 = 0;
    $num2 = 0;
    $num3 = 0;
    $salida = 0;
    
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $num3 = $_GET["num3"];
    
    $salida = $num3;
    
    if ($num1 < $num2) {
        if ($num1 < $num3) $salida = $num1;
    } else {
        if ($num2 < $num3) $salida = $num2;
    }
    
    echo "El menor es $salida";