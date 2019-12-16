<?php
require_once 'Texto.php'; // cargando la clase

$a = new Texto("ejemplo"); // estoy creando un objeto
$b = new Texto();

echo $a->getCadena(true) . "<br>";
echo $b->getCadena(true) . "<br>";

echo $a->getNumeroVocales() . "<br>" ;
$b->setCadena("Texto para pruebas");
echo $b->getCadena(true) . "<br>";
echo $b->getNumeroVocales() . "<br>";
