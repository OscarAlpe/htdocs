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
                          "Inicio"=>$this->crearRuta(["accion"=>"index"]),
                        ];
    }

    public function indexAccion($objeto){
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
            "vista"=>"index",
            "pie"=>$this->miPie,
            "menu"=>(new \clases\Menu($this->miMenu, "Inicio"))->html(),
            "numero1"=> $numero1,
            "numero2"=> $numero2,
            "suma"=>$suma,
        ]);
    }

}
