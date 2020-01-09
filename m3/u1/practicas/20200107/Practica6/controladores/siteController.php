<?php

namespace controladores;

use clases\Palabra;
use clases\Numero;

class siteController extends Controller{
    private $miPie;
    private $miMenu;
    private $coordenadasRestaurantes;

    public function __construct() {
        parent::__construct();
        $this->miPie = "Práctica 6 de clase";
        $this->miMenu = [
                          "Inicio"=>$this->crearRuta(["accion"=>"index"]),
                          "Hospitales y Residencias"=>$this->crearRuta(["accion"=>"hospitales"]),
                          "Restaurantes y Bares"=>$this->crearRuta(["accion"=>"restaurantes"]),
                          "Paradas de autobuses"=>$this->crearRuta(["accion"=>"autobuses"]),
                          "Ver mapa"=>$this->crearRuta(["accion"=>"ver_mapa"]),
                        ];
        $this->coordenadasRestaurantes = "";
    }

    public function indexAccion(){
        $this->render([
            "vista"=>"index",
            "pie"=>$this->miPie,
            "menu"=>(new \clases\Menu($this->miMenu, "Inicio"))->html()
        ]);
    }

    public function hospitalesAccion($objeto){
        $vista = "";
        if (empty($objeto->getValores())) {
            $vista = "hospitales";
        } else {
            $vista = "resultadoHospitales";
        }

        $this->render([
            "vista"=>$vista,
            "pie"=>$this->miPie,
            "menu"=>(new \clases\Menu($this->miMenu, "Hospitales y Residencias"))->html()
        ]);
    }

    public function restaurantesAccion($objeto){
        $vista = "";
        if (empty($objeto->getValores())) {
            $vista = "restaurantes";
        } else {
            $vista = "resultadoRestaurantes";
            $this->coordenadasRestaurantes = $objeto->getValores()["coordenadasRestaurantes"];
            var_dump($this);
        }

        $this->render([
            "vista"=>$vista,
            "pie"=>$this->miPie,
            "menu"=>(new \clases\Menu($this->miMenu, "Restaurantes y Bares"))->html()
        ]);
    }

    public function autobusesAccion($objeto){
        $vista = "";
        if (empty($objeto->getValores())) {
            $vista = "autobuses";
        } else {
            $vista = "resultadoAutobuses";
        }

        $this->render([
            "vista"=>$vista,
            "pie"=>$this->miPie,
            "menu"=>(new \clases\Menu($this->miMenu, "Paradas de autobuses"))->html()
        ]);
    }

    public function ver_mapaAccion(){
        $this->render([
            "vista"=>"ver_mapa",
            "pie"=>$this->miPie,
            "menu"=>(new \clases\Menu($this->miMenu, "Ver mapa"))->html(),
            "x"=>$this->coordenadasRestaurantes,
        ]);
    }

}
