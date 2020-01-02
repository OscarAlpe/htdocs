<?php

namespace clases;

class Caja extends Figura {
    private $punto1;
    private $punto2;
    private $redondeada;
    
    public function __construct($a_asociativo=[]) {
        $defecto = [
          "Punto1" => new Punto(["X"=>0, "Y"=>0]),
          "Punto2" => new Punto (["X"=>100, "Y"=>100]),
          "Color" => "black",
          "Fondo" => "white",
          "Redondeada" => false,
          "Ancho" => 1097,
          "Alto" => 554,
        ];
        
        $array_mezclado = array_merge($defecto, $a_asociativo);
        $this->setPunto1($array_mezclado["Punto1"]);
        $this->setPunto2($array_mezclado["Punto2"]);
        $this->setRedondeada($array_mezclado["Redondeada"]);
        parent::__construct(["Color" => $array_mezclado["Color"],
                             "Fondo" => $array_mezclado["Fondo"],
                             "Ancho" => $array_mezclado["Ancho"],
                             "Alto" => $array_mezclado["Alto"]]);
        
    }
   
    private function getRedondeada() {
        return $this->redondeada;
    }

    private function setRedondeada($redondeada) {
        $this->redondeada = $redondeada;
        return $this;
    }

    private function getPunto1() {
        return $this->punto1;
    }

    private function getPunto2() {
        return $this->punto2;
    }

    private function setPunto1($punto1) {
        $this->punto1 = $punto1;
        return $this;
    }

    private function setPunto2($punto2) {
        $this->punto2 = $punto2;
        return $this;
    }
    
    public function dibuja() {
        $fondo = parent::dibuja();
        $retorno = $fondo . '<rect x="' . $this->getPunto1()->getX() .'" y="' .
               $this->getPunto1()->getY() . 
               '" width="' . ($this->getPunto2()->getX() - $this->getPunto1()->getX()) .
               '" height="' . ($this->getPunto2()->getY() - $this->getPunto1()->getY()) .
               '" style="fill:' . $this->getColor() . '"';
        
        if ($this->getRedondeada()) {
            $retorno .= ' rx="10" ry="10"';
        }
        $retorno .= ' />';
        
        return $retorno;
    }
}
