<?php

namespace clases;

class Poligono extends Figura {
    private $puntos = [];
    
    public function __construct($puntos) {
        $this->puntos = $puntos;
    }

    public function getPuntos() {
        return $this->puntos;
    }

    public function setPuntos($puntos) {
        $this->puntos = $puntos;
        return $this;
    }
}
