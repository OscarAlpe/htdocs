<?php

namespace clases;

class Profesor extends Persona{
    private $materia;
    private $sueldo=[];
    
    function getMateria() {
        return $this->materias;
    }

    function getSueldo() {
        return $this->sueldo;
    }

    function setMateria($materias) {
        $this->materias = $materias;
    }

    function setSueldo(int $mes,float $sueldo) {
        $this->sueldo[$mes] = $sueldo;
    }
    
    public function __construct($a_asociativo=[]) {
        $opcionales = [
            "Sueldo" => 0,
            "Mes" => 1,
        ];
        
        $array_mezclado = array_merge($opcionales, $a_asociativo);

        $this->sueldo = array_fill(1,12,0.0);
        $this->setMateria($array_mezclado["Materias"]);
        $this->setSueldo($array_mezclado["Mes"], $array_mezclado["Sueldo"]);
        
        parent::__construct([
            "Nombre" => $array_mezclado["Nombre"],
            "Edad" => $array_mezclado["Edad"],
        ]);
    }
}
