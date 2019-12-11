<?php

function crearTextos($a) {
    $salida = [];
    $sStyle = "";
    
    foreach ($a as $key => $value) {
        
        $defecto = [
            "id" => "i" . $key,
            "type"=>"text",
            "class"=>"",
            "placeholder"=>"Escribe tu " . $key,
        ];
        
        $combinacion = array_merge($defecto,$value);
        
        if ($combinacion["type"] == "text") {
            $temp = "<label class=\"col-sm-2\">" . $value["value"] . " </label>";
            $sStyle = "";
            foreach ($combinacion["style"] as $ks => $vs) {
                $sStyle .= "$ks: $vs;";
            }
            $temp .= '<input name="' . $key . '" placeholder="' .
                        $combinacion["placeholder"] . '" style="' . $sStyle.'" class="'. $combinacion["class"] .'" >';
        }
        $salida[$key] = $temp;
    }
    
    return $salida;
}

function crearRadioButtons($a) {
    $salida = [];
    
    foreach ($a as $key => $value) {
        if ($value["type"] == "radiobutton") {
            $temp = "<legend class=\"col-form-label col-sm-2 pt-0\">" .
                    $value["value"] . "</legend>";
            foreach ($value["buttons"] as $vb) {
                $temp .= '<input class="form-check-input" name="' . $key .
                         '[]" type="radio" id="' . $vb["id"] . '" ' .
                         'value="' . $vb["value"] . '" />';
                $temp .= '<label class="form-check-label" for="' . $vb["value"] .
                         '">&nbsp;' . $vb["label"] . '</label>';
            }
            $salida[$key] = $temp;
        }
    }
    
    return $salida;
}

/* array_walk($estilos, function($v,$i)use(&$a) {
 * $a.="$i: $v;";
 * });
 */