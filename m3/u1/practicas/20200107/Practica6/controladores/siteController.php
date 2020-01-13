<?php

namespace controladores;

use clases\Palabra;
use clases\Numero;

class siteController extends Controller{
    private $miPie;
    private $miMenu;

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

    public function hospitalesAccion($objeto){
        $vista = "";
        if (empty($objeto->getValores())) {
            $vista = "hospitales";
        } else {
            $vista = "resultadoHospitales";
            $separador = "";
            if ($_SESSION["coordenadasHospitales"] != "") {
                $separador = " ";
            }
            $_SESSION["coordenadasHospitales"] .= $separador . $objeto->getValores()["coordenadasHospitales"];
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
            $separador = "";
            if ($_SESSION["coordenadasRestaurantes"] != "") {
                $separador = " ";
            }
            $_SESSION["coordenadasRestaurantes"] .= $separador . $objeto->getValores()["coordenadasRestaurantes"];
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
            $separador = "";
            if ($_SESSION["coordenadasAutobuses"] != "") {
                $separador = " ";
            }
            $_SESSION["coordenadasAutobuses"] .= $separador . $objeto->getValores()["coordenadasAutobuses"];
        }

        $this->render([
            "vista"=>$vista,
            "pie"=>$this->miPie,
            "menu"=>(new \clases\Menu($this->miMenu, "Paradas de autobuses"))->html()
        ]);
    }

    public function ver_mapaAccion($objeto){
        $cH=[];
        if (empty($objeto->getValores()) OR isset($objeto->getValores()["chkHospitales"])) {
            if ($_SESSION["coordenadasHospitales"] != "") {
                $coordenadasH = explode(" ", $_SESSION["coordenadasHospitales"]);
                foreach ($coordenadasH as $value) {
                    $cH[]=explode(",", $value);
                }
            }
        }

        $cR=[];
        if (empty($objeto->getValores()) OR isset($objeto->getValores()["chkRestaurantes"])) {
            if ($_SESSION["coordenadasRestaurantes"] != "") {
                $coordenadasR = explode(" ", $_SESSION["coordenadasRestaurantes"]);
                foreach ($coordenadasR as $value) {
                    $cR[]=explode(",", $value);
                }
            }
        }

        $cA=[];
        if (empty($objeto->getValores()) OR isset($objeto->getValores()["chkAutobuses"])) {
            if ($_SESSION["coordenadasAutobuses"] != "") {
                $coordenadasA = explode(" ", $_SESSION["coordenadasAutobuses"]);
                foreach ($coordenadasA as $value) {
                    $cA[]=explode(",", $value);
                }
            }
        }
        
        foreach ($cH as $valueH) {
            for ($i=0; $i < count($cR); $i++) {
                if ($valueH[0] == $cR[$i][0] AND $valueH[1] == $cR[$i][1]) {
                    $cR[$i][0] = "";
                    $cR[$i][1] = "";
                }
            }

            for ($i=0; $i < count($cA); $i++) {
                if ($valueH[0] == $cA[$i][0] AND $valueH[1] == $cA[$i][1]) {
                    $cA[$i][0] = "";
                    $cA[$i][1] = "";
                }
            }
        }

        foreach ($cR as $valueR) {
            for ($i=0; $i < count($cA); $i++) {
                if ($valueR[0] == $cA[$i][0] AND $valueR[1] == $cA[$i][1]) {
                    $cA[$i][0] = "";
                    $cA[$i][1] = "";
                }
            }
        }

        $chkH = "checked";
        $chkR = "checked";
        $chkA = "checked";
        if (!empty($objeto->getValores())) {
            if (!isset($objeto->getValores()["chkHospitales"])) {
                $chkH = "";
            }
            if (!isset($objeto->getValores()["chkRestaurantes"])) {
                $chkR = "";
            }
            if (!isset($objeto->getValores()["chkAutobuses"])) {
                $chkA = "";
            }
        }
        
        $this->render([
            "vista"=>"ver_mapa",
            "pie"=>$this->miPie,
            "menu"=>(new \clases\Menu($this->miMenu, "Ver mapa"))->html(),
            "cH"=>$cH,
            "cR"=>$cR,
            "cA"=>$cA,
            "chkH"=>$chkH,
            "chkR"=>$chkR,
            "chkA"=>$chkA,
        ]);
    }
}
