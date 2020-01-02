<?php

namespace clases;

class Circulo extends Figura {
    private $centro;
    
    public function __construct($a_asociativo=[]) {
        $defecto = [
          "X" => 0,
          "Y" => 0,
          "Color" => "black",
          "Fondo" => "white",
          "Ancho" => 1097,
          "Alto" => 554,
        ];
        
        $array_mezclado = array_merge($defecto, $a_asociativo);
        
        $this->centro = new Punto(["X"=>$array_mezclado["X"], "Y"=>$array_mezclado["Y"]]);
        parent::__construct(["Color" => $array_mezclado["Color"],
                             "Fondo" => $array_mezclado["Fondo"],
                             "Ancho" => $array_mezclado["Ancho"],
                             "Alto" => $array_mezclado["Alto"]]);
    }

    private function getCentro() {
        return $this->centro;
    }

    private function setCentro($centro) {
        $this->centro = $centro;
        return $this;
    }
    
    public function dibuja() {
        $fondo = parent::dibuja();
        return $fondo . '<circle cx="' . $this->getCentro()->x . '" cy="' . $this->getCentro()->y . '" r="40" stroke="' . $this->getFondo() . '" stroke-width="4" fill="' . $this->getColor() . '" />';
    }
}
