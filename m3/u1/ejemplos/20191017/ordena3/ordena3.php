<?php
    $num1 = 0;
    $num2 = 0;
    $num3 = 0;
    $salida = [0, 0 ,0];
    
    $indice = 2;
    $ordenado = false;
    $cambio = false;
    
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];

    $salida[0] = $num1;
    $salida[1] = $num2;
    $salida[2] = $num3;
    
    while (!$ordenado) {
        if ($salida[$indice] > $salida[$indice-1]) {
            $temporal = $salida[$indice-1];
            $salida[$indice-1] = $salida[$indice];
            $salida[$indice] = $temporal;
            $cambio = true;
        }
        
        $indice--;
        
        if ($indice < 1) {
            if (!$cambio) {
                $ordenado = true;
            } else {
                $indice = 2;
                $cambio = false;
            }
        }
    }
        
    echo "Los números ordenados de mayor a menor son $salida[0], $salida[1], $salida[2]";