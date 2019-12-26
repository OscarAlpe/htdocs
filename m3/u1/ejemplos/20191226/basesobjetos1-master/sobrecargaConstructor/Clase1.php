<?php

/**
 * Description of Clase1
 *
 * @author ramon
 */
class Clase1 {
    public $nombre;
    public $apellidos;
    public $edad;
    public function __construct() {
        /* inicializo */
        $this->setApellidos("");
        $this->setNombre("");
        $this->setEdad(0);
            
        if(func_num_args()>0 && func_num_args()<4){
            $numero="constructor" . func_num_args();
            $this->$numero(func_get_args());
        }
    }
    
    private function constructor1($a){
        $this->setNombre($a[0]);
    }
    
    private function constructor2($a){
        $this->setNombre($a[0]);
        $this->setApellidos($a[1]);
    }
    
    private function constructor3($a){
        $this->setNombre($a[0]);
        $this->setApellidos($a[1]);
        $this->setEdad($a[2]);
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
