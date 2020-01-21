<?php

namespace clases;

/**
 * Description of Explorador
 *
 * @author Oscar
 */
class Explorador {
    private $directorio_actual;
    
    public function __construct($d = ".") {
        $this->directorio_actual = $d;
    }
    
    public function lista_directorio() {
        $salida = "";
        
        $dir = scandir($this->directorio_actual);
        foreach ($dir as $valor) {
            if (is_dir($this->directorio_actual . "\\" . $valor)) {
                $salida .= "<div><img src=\"icons/gnome-fs-directory-accept_36150.png\"><a href=\"index.php?dir=" . realpath($this->directorio_actual . "\\" . $valor) . "\">$valor</a></div>";               
            } else {
                $salida .= "<div><img src=\"icons/libreoffice-writer_36097.png\">$valor</div>";
            }
        }
        
        return $salida;
    }
}
