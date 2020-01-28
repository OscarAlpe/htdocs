<?php

namespace clases;

/**
 * Description of Numeros
 *
 * @author Oscar
 */

use clases\Fichero;

class Numeros {
    private $array_numeros;
    
    public function __construct($param) {
        $this->array_numeros = $param;
    }
    
    public function numerosRepetidos() {
        $salida = "No hay elementos repetidos.";
        
        $acv = array_count_values($this->array_numeros);
        foreach ($acv as $key=>$valor) {
            if ($key != "" and $valor > 1) {
                $salida="Hay elementos repetidos.";
                break;
            }
        }
        return $salida;
    }
    
    public function rellenado($f) {
        $rellenado = 0;
        $total = count($this->array_numeros);
        $salida = "";
        
        foreach ($this->array_numeros as $key=>$valor) {
            if ($valor != "") {
                $rellenado++;
            }
            $f->escribirLinea("Campo $key valor $valor");
        }
        
        $salida = "Has rellenado $rellenado cajas de un total de $total";
        
        return $salida;
    }
}
