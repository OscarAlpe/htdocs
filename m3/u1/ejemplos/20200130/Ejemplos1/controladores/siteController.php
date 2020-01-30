<?php

namespace controladores;

use clases\Numeros;

class siteController extends Controller{
    private $miPie;
    private $miMenu;

    public function __construct() {
        parent::__construct();
        $this->miPie = "<hr><br /><br />Autor: Oscar Megía";
        $this->miMenu = [
                          "Ejercicio 1"=>$this->crearRuta(["accion"=>"ejercicio1"]),
                          "Ejercicio 2"=>$this->crearRuta(["accion"=>"ejercicio2"]),
                        ];
    }

    public function ejercicio1Accion($objeto){
        $suma = "";
        $numero1 = "";
        $numero2 = "";
        
        if (!empty($objeto->getValores())) {
            $numero1 = $objeto->getValores()["numero1"];
            $numero2 = $objeto->getValores()["numero2"];
            $n = new Numeros($numero1, $numero2);
            $suma = $n->suma();
        }
        
        $this->render([
            "vista"=>"ejercicio1",
            "pie"=>$this->miPie,
            "menu"=>(new \clases\Menu($this->miMenu, "Ejercicio 1"))->html(),
            "numero1"=> $numero1,
            "numero2"=> $numero2,
            "suma"=>$suma,
        ]);
    }

    public function ejercicio2Accion($objeto){
        $suma = "";
        $resta = "";
        $producto = "";
        $cociente = "";
        $division = "";
        $numero1 = "";
        $numero2 = "";
        
        if (!empty($objeto->getValores())) {
            $numero1 = $objeto->getValores()["numero1"];
            $numero2 = $objeto->getValores()["numero2"];
            $n = new Numeros($numero1, $numero2);
            $suma = $n->suma();
            $resta = $n->resta();
            $producto = $n->producto();
            $cociente = $n->cociente();
            $division = $n->division();
        }
        
        $this->render([
            "vista"=>"ejercicio2",
            "pie"=>$this->miPie,
            "menu"=>(new \clases\Menu($this->miMenu, "Ejercicio 2"))->html(),
            "numero1"=> $numero1,
            "numero2"=> $numero2,
            "suma"=>$suma,
            "resta"=>$resta,
            "producto"=>$producto,
            "cociente"=>$cociente,
            "division"=>$division,
        ]);
    }

}
