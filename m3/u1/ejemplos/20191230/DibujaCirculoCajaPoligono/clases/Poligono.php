<?php

namespace clases;

class Poligono extends Figura {
    private $puntos;
    
    public function __construct($a_asociativo=[]) {
        $defecto = [
          "Puntos" => "0,0 10,10",
          "Color" => "black",
          "Fondo" => "white",
          "Ancho" => 1097,
          "Alto" => 554,
        ];
        
        $array_mezclado = array_merge($defecto, $a_asociativo);
        
        $this->setPuntos($array_mezclado["Puntos"]);
        parent::__construct(["Color" => $array_mezclado["Color"],
                             "Fondo" => $array_mezclado["Fondo"],
                             "Ancho" => $array_mezclado["Ancho"],
                             "Alto" => $array_mezclado["Alto"]]);

    }

    private function getPuntos() {
        return $this->puntos;
    }

    private function setPuntos($puntos) {
        $this->puntos = $puntos;
        return $this;
    }
    
    public function dibuja() {
        $fondo = parent::dibuja();
        return $fondo . '<polygon points="' . $this->getPuntos() .
               '" style="fill:' . $this->getColor() . '" />';
    }
}
