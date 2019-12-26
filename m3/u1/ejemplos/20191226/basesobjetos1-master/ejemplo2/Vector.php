<?php


class Vector {
    
    public function __construct($valores) {
        $this->valores = $valores;
        $this->setModa();
        $this->setMaximo();
    }

    
    public function getMaximo() {
        return $this->maximo;
    }

    public function setMaximo() {
        $this->maximo = max($this->getValores());
    }

        
    public function getValores() {
        return $this->valores;
    }
    
    public function imprimirValores(){
        var_dump($this->getValores());
    }

    public function setValores($valores) {
        $this->valores = $valores;
        $this->setModa();
        $this->setMaximo();
    }
    
    public function setModa(){
        $this->moda=1;
    }
    
    public function getModa(){
        return $this->moda;
    }

        private $valores;
        private $moda;
        private $maximo;
    
}
