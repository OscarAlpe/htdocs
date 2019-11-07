<?php

    function crearMenu($arrayMenu) {
        $salida="";
        
        $salida="<ul>";

        foreach ($arrayMenu as $etiqueta => $url ) {
            $salida.="<li><a href=\"$url\">$etiqueta</a></li>";
        }
        
        $salida.="</ul>";
        
        return $salida;
    }

    echo crearMenu([
                    "etiqueta1"=>"http1",
                    "etiqueta2"=>"http2",
                  ]);