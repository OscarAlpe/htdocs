<?php

namespace clases;

class Vector {

    public function __construct($valores=[]) {
        $this->setValores($valores);
    }

    public function getMaximo() {
        return $this->maximo;
    }

    private function setMaximo() {
        if (($this->getValores() != null) AND count($this->getValores()) > 0) {
            $this->maximo = max($this->getValores());
        } else {
            $this->maximo = null;
        }
    }

    public function getValores() {
        return $this->valores;
    }

    public function imprimirValores() {
        var_dump($this->getValores());
    }

    public function setValores($valores) {
        $this->valores = $valores;
        $this->setModa();
        $this->setMaximo();
    }

    private function setModa() {
        $this->moda = 1;
    }

    public function getModa() {
        return $this->moda;
    }

    protected $valores;
    protected $moda;
    private $maximo;

}
