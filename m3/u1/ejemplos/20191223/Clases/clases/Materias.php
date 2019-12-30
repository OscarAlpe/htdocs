<?php

namespace clases;

class Materias {
    public $nombre;
    private $horas;
    private $titular;
    
    function getNombre() {
        return $this->nombre;
    }

    function getHoras() {
        return $this->horas;
    }

    function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }

    function setHoras(int $horas) {
        $this->horas = $horas;
    }
    
    public function construct(string $nombre,int $horas) {
        $this->setHoras($horas);
        $this->setNombre($nombre);
        //$this->setTitular($titular);
    }
    
    public function getTitular() {
        return $this->titular;
    }

    public function setTitular(Profesor $titular) {
        $this->titular = $titular;
    }
    
    public function __construct($a_asociativo = []) {
        $opcionales = [
          "Horas" => 0,
          "Nombre" => "",
          "Titular" => new Profesor([
              "Nombre" => "Profesor titular por defecto",
              "Edad" => 0,
              "Materias" => [$this],
          ]),
        ];
        
        $array_mezclado = array_merge($opcionales, $a_asociativo);
        
        $this->setHoras($array_mezclado["Horas"]);
        $this->setNombre($array_mezclado["Nombre"]);
        $this->setTitular($array_mezclado["Titular"]);
    }
}
