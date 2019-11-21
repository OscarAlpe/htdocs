<?php
    function existe_caracter($cadena, $caracteres) {
        $salida = [];
        
        for ($i=0; $i<strlen($cadena); $i++) {
            for ($j=0; $j<strlen($caracteres); $j++) {
                if ($cadena[$i] == $caracteres[$j]) {
                    $salida[] = $i;
                    break;
                }
            }
        }
        
        return $salida;
    }

    function crea_acertados($cadena, $array_acertados) {
        $salida = str_repeat("_", strlen($cadena));
        for ($i=0; $i < strlen($cadena); $i++) {
            foreach ($array_acertados as $value) {
                $salida[$value] = $cadena[$value];
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
    
    function generateRandomString($length = 10) { 
        return substr(str_shuffle("abcdefghijklmnopqrstuvwxyz "), 0, $length);
    } 
    /*
    
    $array_encontrados = existe_caracter("esto es una prueba", "e");
    
    var_dump($array_encontrados);
    
    echo crea_acertados("esto es una prueba", $array_encontrados);
    
    $array_encontrados = existe_caracter("esto es una prueba", "ea");
    
    var_dump($array_encontrados);
    
    echo separa_caracteres(crea_acertados("esto es una prueba", $array_encontrados));
    
    */