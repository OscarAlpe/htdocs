<?php
$f=fopen("datos.txt", "r");
$vector=file("datos.txt");
var_dump($vector);
$cadena= file_get_contents("datos.txt");
var_dump($cadena);

