<?php

function crearTextos($a) {
    $salida = [];
    $sStyle = "";
    
    foreach ($a as $key => $value) {
        
        $defecto = [
            "id" => "i" . $key,
            "type" => "text",
            "class" => "",
            "placeholder" => "Escribe tu " . $key,
        ];
        
        $combinacion = array_merge($defecto,$value);
        
        $temp = "<label class=\"col-sm-2\">" . $value["value"] . " </label>";
        $sStyle = "";
        foreach ($combinacion["style"] as $ks => $vs) {
            $sStyle .= "$ks: $vs;";
        }
        $temp .= '<input name="' . $key . '" placeholder="' .
                    $combinacion["placeholder"] . '" style="' . $sStyle.'" class="'. $combinacion["class"] .'" type="' . $combinacion["type"] . '" >';
        $salida[$key] = $temp;
    }
    
    return $salida;
}

function crearRadioButtons($a) {
    $salida = [];
    
    foreach ($a as $key => $value) {
        $temp = "<legend class=\"col-form-label col-sm-2\">" .
                $value["value"] . "</legend>";         
        $temp .= creaRadioButton($value["buttons"], $key);
        $salida[$key] = $temp;
    }
    
    return $salida;
}

function creaRadioButton($value, $k) {
    $salida = "";
       
    $salida = "<div class=\"form-check form-check-inline\" row>";
    
    foreach ($value as $vb) {
        $defecto = [
            "id" => "i" . $k,
            "value" => "v" . $k,
            "label" => $k,
            "style" => [],
        ];

        $combinacion = array_merge($defecto, $vb);
        
        $a = "";
        
        $as = $combinacion["style"];
        array_walk($as, function($as, $i)use(&$a) {
            $a .= "$i: $as;";
        });
        
        $salida .= '<input class="form-check-input" name="' . $k .
                   '[]" type="radio" id="' . $combinacion["id"] . '" ' .
                   'value="' . $combinacion["value"] . '" />';
        $salida .= '<label class="form-check-label" for="' . $combinacion["value"] .
                   '" style="' . $a . '">' . $combinacion["label"] .
                   '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>';
    }
    $salida .= "</div>";

            
    return $salida;
}
