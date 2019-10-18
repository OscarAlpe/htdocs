<?php
    $nota = 0;
    $salida = "";
    
    $nota = $_GET["nota"];
    
    if ($nota >= 0 and $nota < 3) {
        $salida = "muy deficiente";
    } elseif ($nota >= 3 and $nota < 5) {
        $salida = "suspenso";
    } elseif ($nota >= 5 and $nota < 6) {
        $salida = "suficiente";
    } elseif ($nota >= 6 and $nota < 7) {
        $salida = "bien";
    } elseif ($nota >= 7 and $nota < 9) {
        $salida = "notable";
    } elseif ($nota >= 9 and $nota <= 10) {
        $salida = "sobresaliente";
    }
    
    echo $salida;