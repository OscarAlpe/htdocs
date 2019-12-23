<?php

namespace clases;

class CalculaDia {
    private $dia_semana;
    
    public function __construct() {
        $this->setDia_semana();
    }

    public function getDia_semana() {
        return $this->dia_semana;
    }

    private function setDia_semana() {
        
        switch (date("N")) {
            case 1:
                $this->dia_semana = "Lunes";
                break;
            case 2:
                $this->dia_semana = "Martes";
                break;
            case 3:
                $this->dia_semana = "Miércoles";
                break;
            case 4:
                $this->dia_semana = "Jueves";
                break;
            case 5:
                $this->dia_semana = "Viernes";
                break;
            case 6:
                $this->dia_semana = "Sábado";
                break;
            case 7:
                $this->dia_semana = "Domingo";
                break;
            default:
                $this->dia_semana = "**ERROR**";
                break;
        }
    }

}
