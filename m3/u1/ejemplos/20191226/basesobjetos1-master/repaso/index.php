<?php
spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

use clases\Persona;
use clases\Elemento;
use clases\Vivienda;

$objeto=new Persona();
$objeto1=new Persona("jose","vv",23,new Vivienda());
$objeto->setVivienda(new Vivienda("isaac peral"));
var_dump($objeto);
var_dump($objeto1);

