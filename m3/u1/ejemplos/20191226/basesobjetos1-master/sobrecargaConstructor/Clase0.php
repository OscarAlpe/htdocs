<?php

/**
 * Description of Clase1
 *
 * @author ramon
 * 
 * Clase sin sobrecarga
 */
class Clase0 {
    public $nombre;
    public $apellidos;
    public $edad;
    public function __construct($nombre="",$apellidos="",$edad=0) {
        $this->setNombre($nombre);
        $this->setApellidos($apellidos);
        $this->setEdad($edad);
    }
    

    
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
        return $this;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
        return $this;
    }

    
}
