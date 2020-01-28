<?php

namespace controladores;

use clases\Renderiza;
use clases\Fichero;
use clases\Numeros;
use clases\BaseDatos;

class siteController extends Controller{
    private $miPie;
    private $miMenu;

    public function __construct() {
        parent::__construct();
        $this->miPie = "<hr><div>Esta página forma parte del curso Desarrollo de aplicaciones con tecnologias Web</div><br /><br />Autor: Oscar Megía";
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
            "dibuja"=>$_SESSION["r"]->dibuja(),
        ]);
    }

    public function paso3Accion($objeto){
        $vista="paso3";

        $f = new Fichero("C:\\WINDOWS\\TEMP\\salidas.txt", "a");
        $n = new Numeros($objeto->getValores()["numeros"]);
        
        $f->abrirFichero();
        
        $repetidos = $n->numerosRepetidos();
        $tRellenado = $n->rellenado($f);
        $f->escribirLinea($repetidos);
        $f->escribirLinea($tRellenado);

        // Se conecta a la BBDD examen1 (examen ya existía)
        $bbdd = new BaseDatos("127.0.0.1", "root", "", "examen1");
        $mensaje = $bbdd->devuelveAleatorio("SELECT * FROM mensajes", "texto");
        
        $f->escribirLinea($mensaje);
        
        $f->cerrarFichero();
        
        $this->render([
            "vista"=>$vista,
            "pie"=>$this->miPie,
            "menu"=>(new \clases\Menu($this->miMenu, "Inicio"))->html(),
            "repetidos"=>$repetidos,
            "rellenado"=>$tRellenado,
            "mensaje"=>$mensaje,
        ]);
    }
    
    public function __destruct() {
        $_SESSION["r"] = serialize($_SESSION["r"]);
    }
}
