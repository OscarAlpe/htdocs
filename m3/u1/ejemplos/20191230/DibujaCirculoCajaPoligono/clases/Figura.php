<?php

namespace clases;

class Figura {
    private $color;
    private $fondo;
    
    public function getColor() {
        return $this->color;
    }

    public function getFondo() {
        return $this->fondo;
    }

    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    public function setFondo($fondo) {
        $this->fondo = $fondo;
        return $this;
    }

    public function __construct($color, $fondo) {
        $this->setColor($color);
        $this->setFondo($fondo);
    }
}
