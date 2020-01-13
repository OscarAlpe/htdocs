<?php

namespace clases;

/**
 * Description of RenderizaTexto
 *
 * @author Oscar
 */
class RenderizaTexto {
    private $a;
    private $texto;
    
    public function __construct($a = [], $texto) {
        $this->a = $a;
        $this->texto = $texto;
    }
    
    function renderiza() {
        $resultado = "";
        foreach ($this->a as $value) {
            if (isset($value[0]) AND isset($value[1])) {
                $resultado .= '<text x="' . $value[0] . '" y="' . $value[1] . '" fill="white">' . $this->texto . '</text>';
            }
        }
        
        return $resultado;
    }
}
