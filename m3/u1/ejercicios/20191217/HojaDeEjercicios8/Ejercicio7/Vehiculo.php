<?php
class Vehiculo {
    
    public $matricula;
    private $color;
    protected $encendido;
    
    function __construct($matricula, $color="blanco", $encendido=false) {
        $this->matricula = $matricula;
        $this->color = $color;
        $this->encendido = $encendido;
    }
/*    
    function __construct($matricula, $color) {
        $this->matricula = $matricula;
        $this->color = $color;
        $this->encendido = false;
    }
    
    function __construct($matricula) {
        $this->matricula = $matricula;
        $this->color = "blanco";
        $this->encendido = false;
    }
*/    
    public function encender() {
        $this->encendido = true;
        echo 'Vehiculo encendido <br />';
    }

    public function apagar() {
        $this->encendido = false;
        echo 'Vehiculo apagado <br />';
    }
    
}
