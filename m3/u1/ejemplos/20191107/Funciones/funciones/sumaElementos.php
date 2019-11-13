<?php
function sumar($array, &$suma) {
    $suma=0;
    
    foreach ($array as $value) {
        $suma+=$value;
    }
}

$a=[1,2,3,4,5,6,7];
$s=0;
sumar($a,$s);
echo $s;