<?php

/**
 * Description of Persona
 *
 * @author ramon
 */
class Persona {
    private $nombre;
    private $edad;
    public function mostrar(){
        echo "soy una persona y mi nombre es $this->nombre y mi edad es $this->edad";
    }
    function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

}
