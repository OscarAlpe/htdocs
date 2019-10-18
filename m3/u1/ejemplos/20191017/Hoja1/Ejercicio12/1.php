<?php
    $horas = 0;
    $minutos = 0;
    $segundos = 0;
    
    $horas = $_GET["horas"];
    $minutos = $_GET["minutos"];
    $segundos = $_GET["segundos"];
    
    $segundos++;
    
    if ($segundos > 59) {
        $segundos = 0;
        $minutos++;
        if ($minutos > 59) {
            $minutos = 0;
            $horas++;
        }
    }
    
    echo "$horas horas $minutos minutos $segundos segundos";