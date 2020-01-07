<?php

namespace controladores;

/**
 * Description of unoController
 *
 * @author Oscar
 */
class unoController extends Controller {
    
    public function indexAccion() {
        $this->render([
            "vista" => "uno",
            "pie" => "Ejemplo primero de clase",
            "menu"=>(new \clases\Menu([
                "Inicio"=>$this->crearRuta(["accion"=>"index"]),
                "Listado 1"=>$this->crearRuta(["accion"=>"listar"]),
                "Entrada"=>$this->crearRuta(["accion"=>"entrada"]),
                "Listado 2"=>$this->crearRuta(["accion"=>"listado2"])
            ],"Inicio"))->html()
        ]);
    }
}
