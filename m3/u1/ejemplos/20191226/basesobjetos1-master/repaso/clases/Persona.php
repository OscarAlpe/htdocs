<?php
namespace clases;

class Persona {
    public $nombre;
    public $apellidos;
    public $vivienda;
    public $edad;
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getVivienda() {
        return $this->vivienda;
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

    public function setVivienda(Vivienda $vivienda) {
        $this->vivienda = $vivienda;
        return $this;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
        return $this;
    }

    public function __construct($nombre="Ramon", $apellidos="",$edad=0,Vivienda $vivienda=null){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->vivienda=$vivienda;
        $this->edad = $edad;
    }

    
}
