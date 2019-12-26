<?php
/**
 * Description of Auto
 *
 * @author ramon
 */
namespace herencia;

class Auto {
    private $nombre="auto";
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
        
    public function getNombre() {
        return $this->nombre;
    }
    
    protected function pintar(){
        echo "Soy un simple coche";
    }
}
