<?php
  
/**
 * Description of Ambulancia
 *
 * @author ramon
 */
namespace herencia;


class Ambulancia extends Auto{
    
    public function encenderSirena(){
        echo "IIIIIIIIIIIIIIIIIIAAAAAAAA";
    }
    public function pintar(){
        //parent::setNombre("ambu");
        echo $this->getNombre();
        echo "Soy una ambulancia";
    }
    public function pintarPadre(){
        //$this->pintar();
        parent::pintar();
    }
}
