<?php

namespace clases;

class CNumeros {
    private $a_numeros = [];
    private $ordenados;
    
    public function __construct($n) {
        $this->a_numeros = $n;
        $this->ordenados = false;
    }
    
    public function ordena() {
        $n = $this->a_numeros;
        
        sort($this->a_numeros);

        if ($n == $this->a_numeros) {
            $this->ordenados = true;
        } else {
            $this->ordenados = false;
        }
        
        return $this->a_numeros;
    }
    
    public function getOrdenados() {
        return $this->ordenados;
    }
}
