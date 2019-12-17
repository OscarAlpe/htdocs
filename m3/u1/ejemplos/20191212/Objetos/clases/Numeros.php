<?php

namespace clases;

class Numeros extends Vector {
    private $media;

    public function __construct($valores = []) {
        parent::__construct($valores);
        
        $this->setModa();
        $this->setMedia();
    }

    private function setModa() {
        $values = array_count_values($this->valores);
        $mode = array_search(max($values), $values);
        
        $this->moda = $mode;
    }
    
    public function getMedia() {
        return $this->media;
    }
    
    private function setMedia() {
        $a = array_filter($this->valores);
        if(count($a)) {
            $average = array_sum($a)/count($a);
        }
        
        $this->media = $average;
    }
}
