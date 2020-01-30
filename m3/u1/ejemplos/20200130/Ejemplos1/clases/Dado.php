<?php

namespace clases;

/**
 * Description of Dado
 *
 * @author Oscar
 */
class Dado {
    private $valorDado;
    
    public function tirada() {
        $this->valorDado = rand(1, 6);
        
        return $this->valorLetras();
    }
    
    public function valorLetras() {
        $salida = "";
        
        switch ($this->valorDado) {
            case 1:
                $salida = "uno";
                break;
            case 2:
                $salida = "dos";
                break;
            case 3:
                $salida = "tres";
                break;
            case 4:
                $salida = "cuatro";
                break;
            case 5:
                $salida = "cinco";
                break;
            case 6:
                $salida = "seis";
                break;
            default:
                $salida = "ERROR";
                break;;
        }
        
        return $salida;
    }
    
    public function dibuja($p) {
        return '<img src="' .$p . '/imagenes/'.$this->valorDado.'.svg">';
    }
}
