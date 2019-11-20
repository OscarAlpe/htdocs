<?php
    function existe_caracter($cadena, $caracteres) {
        $salida = [];
        $index = 0;
        
        for ($i=0; $i<strlen($cadena); $i++) {
            for ($j=0; $j<strlen($caracteres); $j++) {
                if ($cadena[$i] == $caracteres[$j]) {
                    $salida[$index]["posicion"] = $i;
                    $salida[$index]["letra"] = $caracteres[$j];
                    $index++;
                    break;
                }
            }
        }
        
        return $salida;
    }

    function crea_acertados($cadena, $array_acertados) {
        $salida = str_repeat("_", strlen($cadena));
        for ($i=0; $i<strlen($cadena); $i++) {
            foreach ($array_acertados as $value) {
                $salida[$value["posicion"]] = $value["letra"];
            }
        }
        
        return $salida;
    }
    
    function separa_caracteres($cadena) {
        $salida = "";
        
        for ($i=0; $i<strlen($cadena); $i++) {
            $salida .= $cadena[$i];
            if ($i < strlen($cadena) - 1) {
                $salida .= " ";
            }
        }
        
        return $salida;
    }
    
    /*
    
    $array_encontrados = existe_caracter("esto es una prueba", "e");
    
    var_dump($array_encontrados);
    
    echo crea_acertados("esto es una prueba", $array_encontrados);
    
    $array_encontrados = existe_caracter("esto es una prueba", "ea");
    
    var_dump($array_encontrados);
    
    echo separa_caracteres(crea_acertados("esto es una prueba", $array_encontrados));
    
    */