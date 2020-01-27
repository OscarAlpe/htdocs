<?php

namespace controladores;

use clases\Palabra;
use clases\Numero;

class siteController extends Controller{
    private $miPie;
    private $miMenu;

    public function __construct() {
        parent::__construct();
        $this->miPie = "Prueba 20200127 de clase";
        $this->miMenu = [
                          "Inicio"=>$this->crearRuta(["accion"=>"index"]),
                        ];
        if (!isset($_SESSION["coordenadasHospitales"])) {
            $_SESSION["coordenadasHospitales"] = "";
        }
        if (!isset($_SESSION["coordenadasRestaurantes"])) {
            $_SESSION["coordenadasRestaurantes"] = "";
        }
        if (!isset($_SESSION["coordenadasAutobuses"])) {
            $_SESSION["coordenadasAutobuses"] = "";
        }
    }

    public function indexAccion(){
        $this->render([
            "vista"=>"index",
            "pie"=>$this->miPie,
            "menu"=>(new \clases\Menu($this->miMenu, "Inicio"))->html()
        ]);
    }

}
