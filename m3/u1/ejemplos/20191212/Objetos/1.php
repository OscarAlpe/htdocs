<?php

$texto="Ejemplo de clase";

function longitud($s) {
    return strlen($s);
}

function vocales($s) {
    $salida = 0;
    $vocales = "aAeEiIoOuU";
    
    for ($i=0; $i<strlen($s); $i++) {
        if (strpos($vocales, $s[$i]) !== false) {
            $salida++;
        }
    }
    
    return $salida;    
}

function novocales($s) {
    $salida = 0;
    
    $salida = strlen($s) - vocales($s);
    
    return $salida;
}

function frecuenciaVocales($s) {
    $salida = [
        "a" => 0,
        "e" => 0,
        "i" => 0,
        "o" => 0,
        "u" => 0,
    ];
    
    for ($i=0; $i<strlen($s); $i++) {
        switch ($s[$i]) {
            case "a":
            case "A":
                $salida["a"]++;
                break;
            case "e":
            case "E":
                $salida["e"]++;
                break;
            case "i":
            case "I":
                $salida["i"]++;
                break;
            case "o":
            case "O":
                $salida["o"]++;
                break;
            case "u":
            case "U":
                $salida["u"]++;
                break;
            default:
                break;
        }
    }
    
    return $salida;  
}

echo "Texto: $texto<br>";
echo "Longitud: " . longitud($texto) . "<br>";
echo "Vocales: " . vocales($texto) . "<br>";
echo "No vocales: " . novocales($texto) . "<br>";
echo "Frecuencia vocales: ";
var_dump(frecuenciaVocales($texto));
