<?php

namespace clases;

class Profesor extends Persona {
    private $materia;
    private $sueldo = [];
    
    public function __construct() {
        $this->materia=new Materias();
    }
    
    private function getSueldo($mes) {
        
    }
}
