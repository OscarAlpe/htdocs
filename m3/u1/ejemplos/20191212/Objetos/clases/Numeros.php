<?php

namespace clases;

class Numeros extends Vector {
    private $media;

    public function __construct($valores = []) {
        parent::__construct($valores);
        
        $this->setValores($valores);
    }

    private function setModa() {
        if ($this->valores != null AND (count($this->valores) > 0)) {
            $values = array_count_values($this->valores);
            $mode = array_keys($values, max($values));

            $this->moda = $mode;
        } else {
            $this->moda = null;
        }
    }
    
    public function getMedia() {
        return $this->media;
    }
    
    private function setMedia() {
        $this->media = null;

        if ($this->getValores() != null AND (count($this->getValores()) > 0)) {
            $a = array_filter($this->getValores());
            if(count($a)) {
                $average = array_sum($a)/count($a);
                $this->media = $average;
            }
        }
    }
    
    public function setValores($valores) {
        parent::setValores($valores);
        
        $this->setModa();
        $this->setMedia();
    }

}