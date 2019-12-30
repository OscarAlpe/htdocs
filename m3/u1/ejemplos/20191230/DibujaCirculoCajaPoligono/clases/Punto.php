<?php

namespace clases;

class Punto {
    public $x;
    public $y;
    
    public function __construct($a_asociativo=[]) {
        $defecto = [
          "X" => 100,
          "Y" => 100,
        ];
        
        $array_mezclado = array_merge($defecto, $a_asociativo);
        
        $this->setX($array_mezclado["X"]);
        $this->setY($array_mezclado["Y"]);
    }
    
    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

    public function setX($x) {
        $this->x = $x;
        return $this;
    }

    public function setY($y) {
        $this->y = $y;
        return $this;
    }
}
