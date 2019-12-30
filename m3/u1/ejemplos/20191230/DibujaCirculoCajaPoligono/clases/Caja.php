<?php

namespace clases;

class Caja extends Figura {
    private $punto1;
    private $punto2;
    
    public function __construct(Punto $punto1, Punto $punto2, $color, $fondo) {
        $this->punto1 = $punto1;
        $this->punto2 = $punto2;
        parent::__construct($color, $fondo);
    }

    public function getPunto1() {
        return $this->punto1;
    }

    public function getPunto2() {
        return $this->punto2;
    }

    public function setPunto1($punto1) {
        $this->punto1 = $punto1;
        return $this;
    }

    public function setPunto2($punto2) {
        $this->punto2 = $punto2;
        return $this;
    }
}
