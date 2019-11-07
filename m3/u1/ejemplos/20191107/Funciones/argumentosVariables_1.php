<?php

    function sumar() {
        $resultado = 0;
        
        /*
        $numArgumentos = func_num_args();
        
        while ($numArgumentos>0) {
            echo func_get_arg($numArgumentos-1)."-";
            $resultado=$resultado+func_get_arg($numArgumentos-1);
            $numArgumentos--;
        }
        */

        $argumentos = func_get_args();
        
        foreach ($argumentos as $valor) {
            $resultado+=$valor;
        }
        
        return $resultado;
    }
    
    echo "La suma es " . sumar() . "<br />";
    
    echo "La suma es " . sumar(3, 5) . "<br />";
    
    echo "La suma es " . sumar(2, 4, 6, 3 ,5) . "<br />";
    
    echo "La suma es " . sumar(3, 5, 8, 13) . "<br />";