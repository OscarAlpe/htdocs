<?php

/**
 * Description of Disco
 *
 * @author ramon
 */
class Disco {
    private $capacidad;
    private $fabricante;
    public function getCapacidad() {
        return $this->capacidad;
    }

    public function getFabricante() {
        return $this->fabricante;
    }

    public function setCapacidad($capacidad) {
        $this->capacidad = $capacidad;
        return $this;
    }

    public function setFabricante($fabricante) {
        $this->fabricante = $fabricante;
        return $this;
    }

    public function __construct(array $datos=["Capacidad"=>"","Fabricante"=>""]) {
        $datos=array_replace(["Capacidad"=>"","Fabricante"=>""],$datos);
        foreach($datos as $indice=>$valor){
            if (method_exists($this, "set" . $indice))
                call_user_func([$this,"set".$indice],$valor);
        }
    }
    
    public function __destruct() {
        echo "<br>Eliminando objeto";
    }
    
    public function __call($name, $arguments){
        echo "<br>Llamando al método de objeto '$name' "
             . implode(', ', $arguments). "\n";
    }
    
    public static function __callStatic($name, $arguments){
        echo "<br>Llamando al método estático '$name' "
             . implode(', ', $arguments). "\n";
    }
    
    public function __set($name, $value){
        echo "<br>Estableciendo '$name' a '$value'\n";
    }
    
    public function __get($name){
        echo "<br>Consultando '$name'\n";
       
    }

    
    
}
