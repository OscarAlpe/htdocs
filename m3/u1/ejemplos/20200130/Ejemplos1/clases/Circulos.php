<?php

namespace clases;

/**
 * Description of Circulos
 *
 * @author Oscar
 */
class Circulos {
    private $numeroCirculos;
    private $ancho;
    private $alto;
    
    public function __construct($n = 3, $an = 1080, $al = 430) {
        $this->numeroCirculos = $n;
        $this->ancho = $an;
        $this->alto = $al;
    }
    
    public function dibuja() {
        $r = [];
        $acum = 0;
        $xMedio = 0;
        
        for ($i=0; $i<$this->numeroCirculos; $i++) {
            $r[] = rand(50, 150);
        }
        
        $xMedio = array_sum($r) * 2;
        $acum = ($this->ancho - $xMedio) / 2;
        
        for ($i=0; $i<count($r); $i++) {
            $acum += $r[$i] + (isset($r[$i-1]) ? $r[$i-1] : 0);
            $x[] = $acum;
        }
                
        $f = '<svg height="' . $this->alto . '" width="' . $this->ancho . '">';
        for ($i=0; $i<count($r); $i++) {
            $c = file_get_contents(dirname(__FILE__) . "/circulosCircle.inc");
            $c = str_replace("{{r}}", $r[$i], $c);
            $c = str_replace("{{cx}}", $x[$i], $c);
            $c = str_replace("{{cy}}", "50%", $c);
            $color = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
            $c = str_replace("{{color}}", $color, $c);
            $f .= $c;
        }
        $f .= '</svg>';
        
        return $f;
    }
}
