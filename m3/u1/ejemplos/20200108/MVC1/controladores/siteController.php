<?php

namespace controladores;

use clases\Palabra;
use clases\Numero;

class siteController extends Controller{
    private $miPie;
    private $miMenu;

    public function __construct() {
        parent::__construct();
        $this->miPie = "Práctica 4 de clase";
        $this->miMenu = [
                          "Inicio"=>$this->crearRuta(["accion"=>"index"]),
                          "Ejercicio 1"=>$this->crearRuta(["accion"=>"ejercicio1"]),
                          "Ejercicio 2"=>$this->crearRuta(["accion"=>"ejercicio2"]),
                          "Ejercicio 3"=>$this->crearRuta(["accion"=>"ejercicio3"]),
                          "Ejercicio 4"=>$this->crearRuta(["accion"=>"ejercicio4"]),
                          "Ejercicio 5"=>$this->crearRuta(["accion"=>"ejercicio5"]),
                          "Ejercicio 6"=>$this->crearRuta(["accion"=>"ejercicio6"]),
                        ];
    }

    public function indexAccion(){
      $this->render([
          "vista"=>"index",
          "pie"=>$this->miPie,
          "menu"=>(new \clases\Menu($this->miMenu, "Inicio"))->html()
    ]);
    }
    
    public function ejercicio1Accion($objeto){
        $vs="";
        $pieEstabanOrdenados="No estaban ordenados ascendentemente";
        $vista="";
        if (empty($objeto->getValores())) {
            $vista = "ejercicio1";
            $pieEstabanOrdenados = $this->miPie;
        } else {
            $v = $objeto->getValores()["numero"];
            sort($v);
            if ($v === $objeto->getValores()["numero"]) {
                $pieEstabanOrdenados = "Estaban ordenados ascendentemente";
            }
            $vs = join(",", $v);
            $vista = "resultadoEjercicio1";
        }
        $this->render([
                      "vista"=>$vista,
                      "pie"=>$pieEstabanOrdenados,
                      "resultado"=>$vs,
                      "menu"=>(new \clases\Menu($this->miMenu, "Ejercicio 1"))->html()
                    ]);
    }
    
    public function ejercicio2Accion($objeto) {
        $vista="";
        $resultado="";
        if (empty($objeto->getValores())) {
            $vista = "ejercicio2";
        } else {
            $p = new Palabra($objeto->getValores()["texto"]);
            $resultado = $p->vocales();
            $vista = "resultadoEjercicio2";
        }
        $this->render([
            "vista"=>$vista,
            "pie"=>$this->miPie,
            "menu"=>(new \clases\Menu($this->miMenu, "Ejercicio 2"))->html(),
            "resultado"=>$resultado,
        ]);
        
    }

    public function ejercicio3Accion() {
        
        $a = [2, 4, 2, 8, 10, 12, 8, 16, 18, 20];

        $n = new Numero($a);

        $this->render([
            "vista"=>"resultadoEjercicio3",
            "pie"=>$this->miPie,
            "menu"=>(new \clases\Menu($this->miMenu, "Ejercicio 3"))->html(),
            "media_aritmetica"=>$n->getMediaAritmetica(),
            "moda"=>$n->getModa(),
            "mediana"=>$n->getMediana(),
            "desviacion_tipica"=>$n->getDesviacionTipica(),
        ]);
    }

}
