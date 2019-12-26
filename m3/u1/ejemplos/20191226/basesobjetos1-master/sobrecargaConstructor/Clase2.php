<?php

/**
 * Description of Clase1
 *
 * @author ramon
 */
class Clase2 {

    public $nombre;
    public $apellidos;
    public $edad;

    public function __construct() {
        $argumentos = func_get_args();
        $numeroArgumentos = func_num_args();
        /* Inicializo */
        $this->setApellidos("");
        $this->setNombre("");
        $this->setEdad(0);
        /* asigno por llamada */
        if (method_exists($this, $f = 'constructor' . $numeroArgumentos)) {
            call_user_func_array(array($this, $f), $argumentos);
        }
    }

    private function constructor1($nombre) {
        $this->setNombre($nombre);
    }

    private function constructor2($nombre, $apellidos) {
        $this->setNombre($nombre);
        $this->setApellidos($apellidos);
    }

    private function constructor3($nombre, $apellidos, $edad) {
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
