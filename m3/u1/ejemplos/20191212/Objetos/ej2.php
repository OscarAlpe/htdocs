<?php

spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

use clases\Vector;
use clases\Numeros;

$a=new Vector([1,1,1,2,2,2,2,3]);
$a->imprimirValores();
echo "El valor maximo es : " . $a->getMaximo() . "<br>";
echo "La moda de a es : " . $a->getModa() . "<br>";

$b=new Numeros([1, 2, 2, 3, 3, 3]);
echo "Los valores de b son : <br>";
$b->imprimirValores();
echo "La moda de b es : <br>";
var_dump($b->getModa());
//echo "La moda de b es : " . $b->getModa() . "<br>";
echo "La media de b es : " . $b->getMedia() . "<br>";

$c=new Numeros([]);
echo "Los valores de c son : <br>";
$c->imprimirValores();
//echo "La moda de c es : " . $c->getModa() . "<br>";
echo "La moda de c es : <br>";
var_dump($c->getModa());
echo "La media de c es : " . $c->getMedia() . "<br>";
