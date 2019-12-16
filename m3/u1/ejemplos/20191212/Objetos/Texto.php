<?php

class Texto {
    private $cadena;
    private $numeroVocales;
    
    public function __construct($cadena="") {
        $this->setCadena($cadena);
    }
    
    public function getCadena($imprimir=0) {
        return ($imprimir ? "La cadena es " . $this->cadena : $this->cadena);
    }

    public function setCadena($cadena) {
        $this->cadena = $cadena;
        $this->numeroVocales=$this->vocales();
        
        return $this;
    }

    public function longitud() {
        return mb_strlen($this->cadena);
    }

    public function getNumeroVocales() {
        return $this->numeroVocales;
    }

    private function vocales() {
        $salida = 0;
        $vocales = "aAeEiIoOuU";
    
        for ($i=0; $i<strlen($this->getCadena()); $i++) {
            if (strpos($vocales, $this->getCadena()[$i]) !== false) {
                $salida++;
            }
        }
    
        return $salida;    
    }
}
