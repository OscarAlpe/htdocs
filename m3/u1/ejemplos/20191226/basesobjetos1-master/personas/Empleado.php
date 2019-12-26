<?php

/**
 * Description of Empleado
 *
 * @author ramon
 */
class Empleado extends Persona {

    private $sueldoBruto;

    public function mostrar() {
        echo "Soy un empleado y mi sueldo bruto es $this->sueldoBruto";
    }
    
    public function calcularSalarioNeto(){
        return $this->sueldoBruto-100;
    }
    
    function __construct($nombre,$edad,$sueldoBruto) {
        $this->sueldoBruto = $sueldoBruto;
        parent::__construct($nombre, $edad);
    }

}
