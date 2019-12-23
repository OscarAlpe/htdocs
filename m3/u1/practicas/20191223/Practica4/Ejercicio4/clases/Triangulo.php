<?php

namespace clases;

class Triangulo {
    private $lado_a;
    private $lado_b;
    private $lado_c;
    private $area;
    private $perimetro;
    
    public function __construct($lado_a, $lado_b, $lado_c) {
        $this->lado_a = $lado_a;
        $this->lado_b = $lado_b;
        $this->lado_c = $lado_c;
        
        $this->setPerimetro();
        $this->setArea();
    }

    public function getArea() {
        return $this->area;
    }

    public function getPerimetro() {
        return $this->perimetro;
    }

    private function setArea() {
        if (($this->perimetro < $this->lado_a) OR
            ($this->perimetro < $this->lado_b) OR
            ($this->perimetro < $this->lado_c)) {
            $this->area = false;
        } else {
            $this->area = sqrt($this->perimetro * ($this->perimetro - $this->lado_a) *
                              ($this->perimetro - $this->lado_b) *
                              ($this->perimetro - $this->lado_c));
        }
    }

    private function setPerimetro() {
        $this->perimetro = ($this->lado_a + $this->lado_b + $this->lado_c ) / 2;
    }

}
