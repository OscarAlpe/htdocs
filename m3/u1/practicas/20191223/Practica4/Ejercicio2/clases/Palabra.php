<?php

namespace clases;

class Palabra {
    private $palabra;
    
    public function __construct($palabra) {
        $this->palabra = $palabra;
    }
    
    public function vocales() {
        $salida = 0;
        $vocales = "aeiou";

        $texto = $this->getPalabra();
        $texto = str_replace(["á", "é", "í", "ó", "ú"],
                             ["a", "e", "i", "o", "u"], $texto);
        $texto = str_replace(["Á", "É", "Í", "Ó", "Ú"],
                             ["a", "e", "i", "o", "u"], $texto);
        for ($i=0; $i<strlen($texto); $i++) {
            if (strpos($vocales, strtolower($texto[$i])) !== false) {
                $salida++;
            }
        }

        return $salida;    
    }

    function getPalabra() {
        return $this->palabra;
    }

}
