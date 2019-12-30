<?php

namespace clases;

class Estudiante extends Persona{
    private $carrera;
    public $notas=[];
    
    function getCarrera() {
        return $this->carrera;
    }

    /**
     * 
     * @return string,  devuelve las notas en string separadas por ,
     */
    function getNotas() {
        return join(",",$this->notas);
    }
    
    public function __toString(){
        return "Soy un estudiante";
    }

    
    function setCarrera(string $carrera) {
        $this->carrera = $carrera;
    }

    function setNotas(array $notas) {
        foreach($notas as $v){
            $this->notas[] = $v;
        }
        
        //array_push($this->notas,[$nota1,$nota2]); // cuidado con pasar varias notas como array
    }
    
    public function __construct($a_asociativo=[]) {
        $opcionales = [
            "Nombre"=> "",
            "Edad"=> 0,
            "Notas"=> [],
            "Carrera"=> "",
        ];

        /** logica de negocio **/
        $array_mezclado = array_merge($opcionales, $a_asociativo);
        
        $this->setCarrera($array_mezclado["Carrera"]);
        $this->setNotas($array_mezclado["Notas"]);
        
        parent::__construct([
            "Nombre" => $array_mezclado["Nombre"],
            "Edad" => $array_mezclado["Edad"],
        ]);
    }

}
