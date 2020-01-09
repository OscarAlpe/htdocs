<?php

namespace clases;

class Numero {
    private $a_numeros = [];
    private $mediaAritmetica;
    private $moda = [];
    private $mediana;
    private $desviacionTipica;
    
    public function __construct($a_numeros) {
        $this->a_numeros = $a_numeros;
        
        $this->setMediaAritmetica();
        $this->setModa();
        $this->setMediana();
        $this->setDesviacionTipica();
    }
    
    private function setMediaAritmetica() {
        $suma = 0;
        
        foreach ($this->a_numeros as $value) {
            $suma += $value;
        }
        
        $this->mediaAritmetica = $suma / count($this->a_numeros);
    }

    public function getMediaAritmetica() {
        return $this->mediaAritmetica;
    }
    
    private function setModa() {
        if ($this->a_numeros != null AND (count($this->a_numeros) > 0)) {
            $values = array_count_values($this->a_numeros);
            $mode = array_keys($values, max($values));

            $this->moda = $mode;
        } else {
            $this->moda = null;
        }
    }
    
    public function getModa() {
        return $this->moda;
    }
    
    private function setMediana() {
        if ($this->a_numeros != null AND (count($this->a_numeros) > 0)) {
            $arr = $this->a_numeros;
            sort($arr);
            $count = count($arr);
            $middleval = floor(($count-1)/2);
            if ($count % 2) {
                $this->mediana = $arr[$middleval];
            } else {
                $low = $arr[$middleval];
                $high = $arr[$middleval+1];
                $this->mediana = ( ($low + $high) / 2);
            }
        } else {
            $this->mediana = null;
        }
    }

    public function getMediana() {
        return $this->mediana;
    }
    
    private function setDesviacionTipica() {
        $this->desviacionTipica = stats_standard_deviation($this->a_numeros);
    }

    public function getDesviacionTipica() {
        return $this->desviacionTipica;
    }

}