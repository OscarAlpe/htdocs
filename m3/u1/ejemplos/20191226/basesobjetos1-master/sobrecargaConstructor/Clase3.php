<?php



/**
 * Description of Clase1
 *
 * @author ramon
 */
class Clase3 {
    public $nombre;
    public $apellidos;
    public $edad;
    public function __construct($datos=[]) {
        $datos=array_replace(["Nombre"=>"","Apellidos"=>"","Edad"=>0],$datos);
            foreach($datos as $indice=>$valor){
                if (method_exists($this, "set" . $indice))
                    call_user_func([$this,"set" . $indice],$valor);
            }
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
