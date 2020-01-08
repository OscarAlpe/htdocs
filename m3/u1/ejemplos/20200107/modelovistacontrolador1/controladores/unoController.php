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
                "Listado 2"=>$this->crearRuta(["accion"=>"listado2"]),
                "Hola"=>$this->crearRuta(["accion"=>"hola",
                                          "controlador"=>"uno"
                                         ]),
                "Adios"=>$this->crearRuta(["accion"=>"adios",
                                           "controlador"=>"uno"
                                          ]),
                "inicioUno"=> $this->crearRuta(["controlador"=>"uno",
                                                "accion"=>"index"
                                               ]) 
            ],"inicioUno"))->html()
        ]);
    }
    
    public function holaAccion() {
        echo "Hola Clase";
    }
    
    public function adiosAccion() {
        $this->render([
            "vista" => "dos",
            "pie" => "Estamos en clase de Poo",
            "menu" => (new \clases\Menu([
                        "Inicio"=>$this->crearRuta(["accion"=>"index"]),
                        "Listado 1"=>$this->crearRuta(["accion"=>"listar"]),
                        "Entrada"=>$this->crearRuta(["accion"=>"entrada"]),
                        "Listado 2"=>$this->crearRuta(["accion"=>"listado2"]),
                        "Hola"=>$this->crearRuta(["accion"=>"hola",
                                                  "controlador"=>"uno"
                                                 ]),
                        "Adios"=>$this->crearRuta(["accion"=>"adios",
                                                   "controlador"=>"uno"
                                                  ]),
                        "inicioUno"=> $this->crearRuta(["controlador"=>"uno",
                                                        "accion"=>"index"
                                                       ]) 
                        ],"Adios"))->html(),
            "mensaje" => "Estoy en el controlador uno la accion adios",
        ]);
    }
}
