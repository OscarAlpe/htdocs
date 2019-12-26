<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Hombre
 *
 * @author ramon
 */
class Hombre {
    public $nombre;
    public $edad;
    public $entradas;
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->entradas=0;
    }
    
    public function __toString() {
        return "Mi nombre es " . $this->nombre . " y mi edad es " . $this->edad . " y has entrado " . $this->entradas;
    }
    
    public function setEntradas(){
        $this->entradas++;
    }


}
