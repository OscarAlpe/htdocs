<?php
    $numero1 = 0;
    $numero2 = 0;
    $numero3 = 0;
    $salida = 0;
    
    $numero1 = $_GET['n1'];
    $numero2 = $_GET['n2'];
    $numero3 = $_GET['n3'];

    if ($numero1 > $numero2) {
        if ($numero1 > $numero3) {
            $salida = $numero1;
        } else {
            $salida = $numero3;
        }
    } else {
        if ($numero2 > $numero3) {
            $salida = $numero2;
        } else {
            $salida = $numero3;
        }
    }
    
    echo "El número mayor es $salida";
    
    echo "<pre>";
    var_dump($_GET);
    echo "</pre>";