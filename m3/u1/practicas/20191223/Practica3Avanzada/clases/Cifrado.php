<?php

namespace clases;

class Cifrado {
    private $frase;
    private $aFrase;
    private $aCifrado;
    private $numero;
    
    public function __construct($frase, $numero) {
        $this->setNumero($numero);
        $this->setFrase($frase);
        $this->setAFrase($this->getFrase());
        $this->setACifrado();
        
        foreach ($this->getACifrado() as $value) {
            foreach ($value as $v) {
                $this->rota($v);
            }
        }
    }
    
    public function getFrase() {
        return $this->frase;
    }

    public function getAFrase() {
        return $this->aFrase;
    }

    public function getACifrado() {
        return $this->aCifrado;
    }

    private function setFrase($frase) {
        $this->frase = $frase;
    }

    private function setAFrase($aFrase) {
        $this->aFrase = explode(" ", $this->getFrase());
    }

    private function setACifrado() {
        $this->aCifrado = array_chunk($this->getAFrase(), $this->getNumero());
    }
    
    private function getNumero() {
        return $this->numero;
    }

    private function setNumero($numero) {
        $this->numero = $numero;
    }

    private function rota($s) {
        $t = $s[strlen($s)-1];
        for ($i=0; $i<strlen($s); $i++) {
            $p = $s[$i];
            if ($i==0) {
                $s[$i] = $t;
            } else {
                $s[$i] = $p;
            }
        }
    }

}
