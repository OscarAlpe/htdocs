<?php
    $num1 = 0;
    $num2 = 0;
    $suma = 0;
    $resta = 0;
    $producto = 0;
    $division = 0;
    
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $producto = $num1 * $num2;
    $division = $num1 / $num2;
    
    echo "Suma $suma Resta $resta Producto $producto Division $division";