<?php
namespace controladores;

class siteController extends Controller{
    
    public function indexAccion($objeto){
      $this->render([
          "vista"=>"index",
          "pie"=>"Estamos probando",
          "menu"=>(new \clases\Menu([
            "Inicio"=>$this->crearRuta(["accion"=>"index"]),
            "Listado 1"=>$this->crearRuta(["accion"=>"listar"]),
            "Entrada"=>$this->crearRuta(["accion"=>"entrada"]),
            "Listado 2"=>$this->crearRuta(["accion"=>"listado2"])
        ],"Inicio"))->html()
    ]);
    }
    
    public function ListarAccion($objeto){
      $this->render([
          "vista"=>"listar",
          "pie"=>"probando",
          "contenido"=>empty($objeto->getValores()) ? ["no hay nada"] : $objeto->getValores(),
          "menu"=>(new \clases\Menu([
            "Inicio"=>$this->crearRuta(["accion"=>"index"]),
            "Listado 1"=>$this->crearRuta(["accion"=>"listar"]),
            "Entrada"=>$this->crearRuta(["accion"=>"entrada"])
        ],"Listado 1"))->html()
    ]);
    }
    
    public function entradaAccion($objeto){
      $this->render([
          "vista"=>"formulario",
          "pie"=>"probando mandar datos",
          "menu"=>(new \clases\Menu([
            "Inicio"=>$this->crearRuta(["accion"=>"index"]),
            "Listado 1"=>$this->crearRuta(["accion"=>"listar"]),
            "Entrada"=>$this->crearRuta(["accion"=>"entrada"])
        ],"Entrada"))->html()
    ]);
    }
    
    public function listado2Accion($objeto){
      $this->render([
          "vista"=>"mostrar",
          "contenido"=>"Esto es un ejemplo de clase",
          "pie"=>"Añadido en clase",
          "menu"=>(new \clases\Menu([
            "Inicio"=>$this->crearRuta(["accion"=>"index"]),
            "Listado 1"=>$this->crearRuta(["accion"=>"listar"]),
            "Entrada"=>$this->crearRuta(["accion"=>"entrada"]),
            "Listado 2"=>$this->crearRuta(["accion"=>"listado2"])
        ],"Listado 2"))->html()
    ]);
    }

}
