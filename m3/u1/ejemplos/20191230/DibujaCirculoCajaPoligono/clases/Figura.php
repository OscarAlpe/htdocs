<?php

namespace clases;

class Figura {
    private $color;
    private $fondo;
    private $ancho;
    private $alto;
    
    public function getColor() {
        return $this->color;
    }

    public function getFondo() {
        return $this->fondo;
    }

    private function setColor($color) {
        $this->color = $color;
        return $this;
    }

    private function setFondo($fondo) {
        $this->fondo = $fondo;
        return $this;
    }
    
    public function dibuja() {
        return '<rect width="' . $this->getAncho() . '" height="' .
               $this->getAlto() . '" style="fill:' . $this->getFondo() . '" />';
    }

    private function getAncho() {
        return $this->ancho;
    }

    private function getAlto() {
        return $this->alto;
    }

    private function setAncho($ancho) {
        $this->ancho = $ancho;
        return $this;
    }

    private function setAlto($alto) {
        $this->alto = $alto;
        return $this;
    }

    public function __construct($a_asociativo=[]) {
        $defecto = [
          "Color" => "black",
          "Fondo" => "white",
          "Ancho" => 1097,
          "Alto" => 554,
        ];
        
        $array_mezclado = array_merge($defecto, $a_asociativo);

        $this->setColor($array_mezclado["Color"]);
        $this->setFondo($array_mezclado["Fondo"]);
        $this->setAlto($array_mezclado["Alto"]);
        $this->setAncho($array_mezclado["Ancho"]);
    }
}
