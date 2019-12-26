<?php

/**
 * Description of Directivo
 *
 * @author ramon
 */
class Directivo extends Empleado{
    private $categoria;
    public function mostrar(){
        echo "Soy un directivo y mi categoria es $this->categoria";
    }
    public function tipoEmpleado(){
        parent::mostrar();
    }
    
    function __construct($nombre,$edad,$sueldoBruto,$categoria) {
        $this->categoria = $categoria;
        parent::__construct($nombre,$edad,$sueldoBruto);
        
    }

}
