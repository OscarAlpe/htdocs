<?php

namespace clases;

class Cadena {
    private $cadena;
    
    public function __construct($cadena) {
        $this->cadena = $cadena;
    }

    public function getCadena() {
        return $this->cadena;
    }

    public function setCadena($cadena) {
        $this->cadena = $cadena;
        return $this;
    }

    public function longitud() {
        return mb_strlen($this->getCadena());
    }
    
    public function numeroVocales() {
        $salida = 0;
        
        $vocales = "aeiou";
    
        $texto = \str_replace(["á", "é", "í", "ó", "ú"],
                              ["a", "e", "i", "o", "u"], $this->getCadena());
        
        for ($i=0; $i<strlen($texto); $i++) {
            if (strpos($vocales, strtolower($texto[$i])) !== false) {
                $salida++;
            }
        }
    
        return $salida; 
    }
    
    public function repiteVocal($v) {
        $vocal = \str_replace(["á", "é", "í", "ó", "ú"],
                              ["a", "e", "i", "o", "u"], $v);

        $cadenaArray = str_split($this->getCadena());
        $tempRepeticiones = array_count_values($cadenaArray);
        
        return array_key_exists($vocal, $tempRepeticiones) ?
                                $tempRepeticiones[$vocal] : 0;
    }
}
