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
                $this->setACifrado($this->rota($v));
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
        $salida = "";
        for ($i=-1; $i<strlen($s)-1; $i++) {
            $p_sig = $s[$i];
            if ($i == -1) {
                $salida .= $t;
            } else {
                $salida .= $p_sig;
            }
        }
        
        return $salida;
    }

}
