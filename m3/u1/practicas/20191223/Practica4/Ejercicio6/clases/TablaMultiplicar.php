<?php

namespace clases;

class TablaMultiplicar {
    private $tabla;
    private $numero;
  
    public function __construct($numero=false) {
        if ($numero == false) {
            $this->setNumero(rand(1, 100));
        } else {
            $this->setNumero($numero);
        }
        $this->setTabla();
    }
    
    public function getTabla() {
        return $this->tabla;
    }

    private function setTabla() {
        for ($i=1; $i<11; $i++)
        $this->tabla[$i] = $this->getNumero () * $i;
    }

    public function getNumero() {
        return $this->numero;
    }

    private function setNumero($numero) {
        $this->numero = $numero;
    }

}
