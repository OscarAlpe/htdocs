<?php

function crearTextos($a) {
    $salida = [];
    $sStyle = "";
    
    foreach ($a as $key => $value) {
        
        $defecto = [
            "id" => "i" . $key,
            "type"=>"text",
            "placeholder"=>"Escribe tu " . $key,
        ];
        
        $combinacion = array_merge($defecto,$value);
        
        if ($combinacion["type"] == "text") {
            $temp = "<label>" . $value["value"] . " </label>";
            $sStyle = "";
            foreach ($combinacion["style"] as $ks => $vs) {
                $sStyle .= "$ks: $vs;";
            }
            $temp .= '<input name="' . $key . '" placeholder="' .
                        $combinacion["placeholder"] . '" style="' . $sStyle.'">';
        }
        $salida[$key] = $temp;
    }
    
    return $salida;
}

function crearRadioButtons($a) {
    $salida = [];
    
    foreach ($a as $key => $value) {
        if ($value["type"] == "radiobutton") {
            $temp = "<legend>" . $value["value"] . "</legend>";
            
            foreach ($value["buttons"] as $vb) {
                $temp .= '<input name="' . $key . '[]" type="radio"' .
                            '" id="' . $vb["id"] . '" ' .
                            'value="' . $vb["value"] . '" />';
                $temp .= '<label for="' . $vb["value"] . '">' . $vb["label"] .
                            '</label>';
            }
            $salida[$key] = $temp;
        }
    }
    
    return $salida;
}