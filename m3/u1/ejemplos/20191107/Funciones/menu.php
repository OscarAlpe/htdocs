<?php

    function crearMenu($arrayMenu) {
        $salida=[];
        
        
        foreach ($arrayMenu as $menu => $value) {
            $submenu = "<ul id=\"$menu\">";
            foreach ($value as $etiqueta => $url ) {
                $submenu .= "<li><a href=\"$url\">$etiqueta</a></li>";
            }
            $submenu .= "</ul>";
            
            $salida[$menu] = $submenu;
        }
        
        
        return $salida;
    }

    $a=crearMenu([
                    "menu1"=>[
                               "menu1etiqueta1"=>"https://google.com/menu1etiqueta1",
                               "menu1etiqueta2"=>"https://google.com/menu1etiqueta2",
                             ],
                    "menu2"=>[
                               "menu2etiqueta1"=>"https://google.com/menu2etiqueta1",
                               "menu2etiqueta2"=>"https://google.com/menu2etiqueta2",
                             ],
                 ],
                );
    
    echo $a["menu1"];
    
    echo $a["menu2"];