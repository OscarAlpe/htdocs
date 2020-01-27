<?php

namespace controladores;

use clases\Renderiza;

class siteController extends Controller{
    private $miPie;
    private $miMenu;

    public function __construct() {
        parent::__construct();
        $this->miPie = "";
        $this->miMenu = [
                          "Inicio"=>$this->crearRuta(["accion"=>"index"]),
                        ];
        if (!isset($_SESSION["r"])) {
            $_SESSION["r"] = new Renderiza();
        } else {
            $_SESSION["r"] = unserialize($_SESSION["r"]);
        }
    }

    public function indexAccion(){
        $this->render([
            "vista"=>"index",
            "pie"=>$this->miPie,
            "menu"=>(new \clases\Menu($this->miMenu, "Inicio"))->html()
        ]);
    }

    public function paso2Accion($objeto){
        if (!empty($objeto->getValores())) {
            $_SESSION["r"]->setTTabla($objeto->getValores()["ttabla"]);
        }
        $this->render([
            "vista"=>"paso2",
            "pie"=>$this->miPie,
            "menu"=>(new \clases\Menu($this->miMenu, "Inicio"))->html(),
            "r"=>$_SESSION["r"],
        ]);
    }

    public function paso3Accion($objeto){
        $vista="paso3";
        if (!empty($objeto->getValores())) {
            if (isset($objeto->getValores()["restablecer"])) {
                $vista = "paso2";
            }
        }
        $this->render([
            "vista"=>$vista,
            "pie"=>$this->miPie,
            "menu"=>(new \clases\Menu($this->miMenu, "Inicio"))->html(),
            "r"=>$_SESSION["r"],
        ]);
    }
    
    public function __destruct() {
        $_SESSION["r"] = serialize($_SESSION["r"]);
    }
}
