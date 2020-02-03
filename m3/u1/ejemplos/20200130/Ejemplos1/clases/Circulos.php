<?php

namespace clases;

/**
 * Description of Circulos
 *
 * @author Oscar
 */
class Circulos {
    
    public function dibuja() {
        $r1 = rand(50, 150);
        $r2 = rand(50, 150);
        $r3 = rand(50, 150);
        
        $y = 400 - max([$r1, $r2, $r3]);
        $x2 = 600;
        $x1 = $x2 - $r2 - $r1;
        $x3 = $x2 + $r2 + $r3;
                
        $f = file_get_contents(dirname(__FILE__) . "/circulos.inc");
        $f = str_replace("{{r1}}", $r1, $f);
        $f = str_replace("{{cx1}}", $x1, $f);
        $f = str_replace("{{cy1}}", $y, $f);

        $f = str_replace("{{r2}}", $r2, $f);
        $f = str_replace("{{cx2}}", $x2, $f);
        $f = str_replace("{{cy2}}", $y, $f);

        $f = str_replace("{{r3}}", $r3, $f);
        $f = str_replace("{{cx3}}", $x3, $f);
        $f = str_replace("{{cy3}}", $y, $f);
        
        return $f;
    }
}
