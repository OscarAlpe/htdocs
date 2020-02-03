<?php

namespace controladores;

use clases\Consultas;

class menuController extends Controller{
    
    public function indexAccion(){
        $this->render([
            "vista"=>"entradas/home",
            "pie"=>"Realizado en clase",
            "texto"=>"Pagina de inicio de la aplicación",
            "activo"=>"Inicio",
        ]);
    }
            
    public function crearbasedatosAccion(){
        $texto = "BBDD creada correctamente";
        
        $opciones=require('config/principal.php');
        $configuraciones=$opciones['baseDatos'][0];
        $conexion = new \mysqli($configuraciones['host'], $configuraciones['user'], $configuraciones['password'], "", $configuraciones['port']);
        $conexion->query("SET NAMES 'utf8'");
        if (!$conexion->query("CREATE DATABASE " . $configuraciones["baseDatos"])) {
            $texto = "ERROR al crear BBDD:" . $conexion->error;
        }
        
        $this->render([
            "vista"=>"entradas/home",
            "pie"=>"Realizado en clase",
            "texto"=>$texto,
            "activo"=>"Inicio",
        ]);
    }

    public function creartablaAccion(){
        $this->render([
            "vista"=>"entradas/home",
            "pie"=>"Realizado en clase",
            "texto"=>"Crear Tabla",
            "activo"=>"Inicio",
        ]);
    }

    public function borrartablaAccion(){
        $this->render([
            "vista"=>"entradas/home",
            "pie"=>"Realizado en clase",
            "texto"=>"Borrar Tabla",
            "activo"=>"Inicio",
        ]);
    }
    
}

