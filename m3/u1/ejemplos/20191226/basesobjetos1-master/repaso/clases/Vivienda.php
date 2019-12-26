<?php


namespace clases;


class Vivienda {
    public $direccion;
    public $poblacion;
    public $provincia;
    
    public function getDireccion() {
        return $this->direccion;
    }

    public function getPoblacion() {
        return $this->poblacion;
    }

    public function getProvincia() {
        return $this->provincia;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
        return $this;
    }

    public function setPoblacion($poblacion) {
        $this->poblacion = $poblacion;
        return $this;
    }

    public function setProvincia($provincia) {
        $this->provincia = $provincia;
        return $this;
    }
    public function __construct($direccion="", $poblacion="", $provincia="") {
        $this->direccion = $direccion;
        $this->poblacion = $poblacion;
        $this->provincia = $provincia;
    }


}
