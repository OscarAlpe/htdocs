<?php

    function suma(...$argumentos) {
        $resultado=0;
        
        foreach ($argumentos as $valor) {
            $resultado+=$valor;
        }
        
        return $resultado;
    }
    
    echo "Suma " . suma(1, 3) . "<br />";
    
    echo "Suma " . suma(1, 3, 5, 7) . "<br />";

    echo "Suma " . suma(2, 4, 6) . "<br />";