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
        
        $salida.='<div style="margin-top: 20px;"';
        for ($i=0; $i<$this->tTabla; $i++) {
            $salida.='<div style="margin-bottom: 5px; margin-top: 10px;">';
            $salida.='<span style="margin-left: 10px; margin-right: 10px;">';
            $salida.='<label for="c'.$i.'">'.$i.'</label>';
            $salida.='</span>';
            $salida.='<input name="numeros[]" id="c'.$i.'" type="text" />';
            $salida.='</div>';
        }
        $salida.='</div>';
        
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
