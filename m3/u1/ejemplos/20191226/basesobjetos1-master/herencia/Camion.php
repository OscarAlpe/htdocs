<?php

/**
 * Description of Camion
 *
 * @author ramon
 */
namespace herencia;
class Camion extends Auto{
    private $estaCargado=false;
    public function pintar(){
        if($this->estaCargado){
            echo "Soy un camion cargado";
        }else{
            echo "Soy un camion";
        }
    }
        

}
