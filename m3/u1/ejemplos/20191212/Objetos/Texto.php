<?php

class Texto {
    private $cadena;
    private $numeroVocales;
    private $numeroNoVocales;
    private $arrayFrecuenciaVocales = [];


    public function __construct($cadena="") {
        $this->setCadena($cadena);
    }
    
    public function getCadena($imprimir=0) {
        return ($imprimir ? "La cadena es " . $this->cadena : $this->cadena);
    }

    public function setCadena($cadena) {
        $this->cadena = $cadena;
        $this->numeroVocales=$this->vocales();
        $this->numeroNoVocales=$this->noVocales();
        $this->calculaFrecuenciaVocales();
        
        return $this;
    }

    public function longitud() {
        return mb_strlen($this->cadena);
    }

    public function getNumeroVocales() {
        return $this->numeroVocales;
    }

    public function getNumeroNoVocales() {
        return $this->numeroNoVocales;
    }

    public function getFrecuenciaVocales() {
        return $this->arrayFrecuenciaVocales;
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
    
    private function noVocales() {
        return $this->longitud() - $this->numeroVocales;
    }
    
    private function calculaFrecuenciaVocales() {
        $salida = [
            "a" => 0,
            "e" => 0,
            "i" => 0,
            "o" => 0,
            "u" => 0,
        ];
        
        $texto = $this->getCadena();
        $texto = str_replace(["á", "é", "í", "ó", "ú"],
                             ["a", "e", "i", "o", "u"], $texto);
        
        for ($i=0; $i<strlen($texto); $i++) {
            switch (strtolower($texto[$i])) {
                case "a":
                    $salida["a"]++;
                    break;
                case "e":
                    $salida["e"]++;
                    break;
                case "i":
                    $salida["i"]++;
                    break;
                case "o":
                    $salida["o"]++;
                    break;
                case "u":
                    $salida["u"]++;
                    break;
                default:
                    break;
            }
        }

        $this->arrayFrecuenciaVocales = $salida;
    }

}
