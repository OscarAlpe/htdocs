<?php

namespace controladores;

use clases\Numeros;
use clases\Dado;
use clases\Circulos;

class siteController extends Controller{
    private $miPie;
    private $miMenu;

    public function __construct() {
        parent::__construct();
        $this->miPie = "<hr><br /><br />Autor: Oscar Megía";
        $this->miMenu = [
                          "Ejercicio 1"=>$this->crearRuta(["accion"=>"ejercicio1"]),
                          "Ejercicio 2"=>$this->crearRuta(["accion"=>"ejercicio2"]),
                          "Ejercicio 3"=>$this->crearRuta(["accion"=>"ejercicio3"]),
                          "Ejercicio 4"=>$this->crearRuta(["accion"=>"ejercicio4"]),
                          "Ejercicio 5"=>$this->crearRuta(["accion"=>"ejercicio5"]),
                          "Ejercicio 6"=>$this->crearRuta(["accion"=>"ejercicio6"]),
                          "Ejercicio 7"=>$this->crearRuta(["accion"=>"ejercicio7"]),
                        ];
        if (!isset($_SESSION["tiradas"])) {
            $_SESSION["tiradas"] = "";
        }
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

    public function ejercicio3Accion($objeto){
        $valorLetras = "<br />";
        
        if (!empty($objeto->getValores())) {
            $d = new Dado();
            $valorLetras = $d->tirada();
        }
        
        $this->render([
            "vista"=>"ejercicio3",
            "pie"=>$this->miPie,
            "menu"=>(new \clases\Menu($this->miMenu, "Ejercicio 3"))->html(),
            "salida"=>$valorLetras,
        ]);
    }

    public function ejercicio4Accion($objeto){
        if (!empty($objeto->getValores())) {
            $d = new Dado();
            $_SESSION["tiradas"] .= $d->tirada() . ", ";
        }

        $this->render([
            "vista"=>"ejercicio4",
            "pie"=>$this->miPie,
            "menu"=>(new \clases\Menu($this->miMenu, "Ejercicio 4"))->html(),
            "salida"=>$_SESSION["tiradas"],
        ]);
    }

    public function ejercicio5Accion($objeto){
        if (!empty($objeto->getValores())) {
            $d = new Dado();
            $_SESSION["tiradas"] .= $d->tirada() . $d->dibuja(\clases\Aplicacion::$urlBase) . "<br />";
        }

        $this->render([
            "vista"=>"ejercicio5",
            "pie"=>$this->miPie,
            "menu"=>(new \clases\Menu($this->miMenu, "Ejercicio 4"))->html(),
            "salida"=>$_SESSION["tiradas"],
        ]);
    }

    public function ejercicio6Accion(){
        $c = new Circulos();
        
        $d = $c->dibuja();
        
        $this->render([
            "vista"=>"ejercicio6",
            "pie"=>$this->miPie,
            "menu"=>(new \clases\Menu($this->miMenu, "Ejercicio 6"))->html(),
            "salida"=>$d,
        ]);
    }

    public function ejercicio7Accion($objeto){
        $d = "";
        $vista="ejercicio7";
        
        if (!empty($objeto->getValores())) {
            $num = $objeto->getValores()["numeroCirculos"];
            $c = new Circulos($num);
        
            $d = $c->dibuja();
            $vista="ejercicio7dibujar";
        }

        
        $this->render([
            "vista"=>$vista,
            "pie"=>$this->miPie,
            "menu"=>(new \clases\Menu($this->miMenu, "Ejercicio 7"))->html(),
            "salida"=>$d,
        ]);
    }

}
