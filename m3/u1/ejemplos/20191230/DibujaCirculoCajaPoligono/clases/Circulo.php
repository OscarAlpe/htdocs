<?php

namespace clases;

class Circulo extends Figura {
    private $centro;
    
    public function __construct($a_asociativo) {
        $defecto = [
          "X" => 100,
          "Y" => 100,
          "Color" => 5,
          "Fondo" => 6,
        ];
        
        $array_mezclado = array_merge($defecto, $a_asociativo);
        
        $this->centro = new Punto(["X"=>$array_mezclado["X"], "Y"=>$array_mezclado["Y"]]);
        parent::__construct($array_mezclado["Color"], $array_mezclado["Fondo"]);
    }

    public function getCentro() {
        return $this->centro;
    }

    public function setCentro($centro) {
        $this->centro = $centro;
        return $this;
    }
    
    public function dibujaSVG() {
        return '<circle cx="' . $this->getCentro()->x . '" cy="' . $this->getCentro()->x . '" r="40" stroke="' . $this->getFondo() . '" stroke-width="4" fill="' . $this->getColor() . '" />';
    }
}
