<?php

namespace clases;

/**
 * Description of Numeros
 *
 * @author Oscar
 */
class Numeros {
    private $numero1;
    private $numero2;
    
    public function __construct($n1, $n2) {
        $this->numero1 = $n1;
        $this->numero2 = $n2;
    }
    
    public function suma() {
        return $this->numero1 + $this->numero2;
    }
    
    public function resta() {
        return $this->numero1 - $this->numero2;
    }
    
    public function producto() {
        return $this->numero1 * $this->numero2;
    }

    public function cociente() {
        return $this->numero1 % $this->numero2;
    }
    
    public function division() {
        return $this->numero1 / $this->numero2;
    }

}
