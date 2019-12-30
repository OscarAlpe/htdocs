<?php

namespace clases;

class Persona {
    private $nombre;
    public $edad;
    
    function getNombre() {
        return $this->nombre;
    }

    function getEdad() {
        return $this->edad;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }
   
    public function estudios(){
        return "mis estudios son...";
    }
    
    public function __construct($a_asociativo) {
        /*
        foreach ($a_asociativo as $indice => $valor) {
            call_user_func([$this,"set" . $indice], $valor);
        }
        */
        // Hace lo mismo que esto:
        $this->setNombre($a_asociativo["Nombre"]);
        $this->setEdad($a_asociativo["Edad"]);
    }
}
