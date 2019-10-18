<?php
    $num1 = 0;
    $num2 = 0;
    $salida = 0;
    
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    
    if ($num1 > $num2) {
        $salida = "$num1 es mayor";
    } else {
        if ($num1 == $num2) {
            $salida = "Son iguales";
        } else {
            $salida = "$num2 es mayor";
        }
    }

    echo $salida;