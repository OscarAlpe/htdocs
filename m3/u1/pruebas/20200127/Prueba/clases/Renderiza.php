<?php

namespace clases;

/**
 * Description of Cajas
 *
 * @author Oscar
 */
class Renderiza {
    private $tTabla;
    
    public function __construct($t = 0) {
        $this->tTabla = $t;
    }
    
    public function dibuja() {
        $salida="";
        
        for ($i=0; $i<$this->tTabla; $i++) {
            $salida.='<div style="margin-bottom:5px; margin-top: 5px;">';
            $salida.='<label for="c'.$i.'">'.$i.'</label>';
            $salida.='<input name="c'.$i.'" id="c'.$i.'" type="text" />';
            $salida.='</div>';
        }
        
        return $salida;
    }
    
    public function getTTabla() {
        return $this->tTabla;
    }

    public function setTTabla($tTabla) {
        $this->tTabla = $tTabla;
        return $this;
    }

}
