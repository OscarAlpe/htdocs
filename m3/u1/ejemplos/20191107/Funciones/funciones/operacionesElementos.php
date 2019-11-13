<?php
function operar($vector, &$salida) {
    $salida["suma"]=0;
    $salida["producto"]=1;
    $salida["media"]=0;
    
    foreach ($vector as $value) {
        $salida["suma"]+=$value;
        $salida["producto"]=$salida["producto"]*$value;
    }
    $salida["media"]=$salida["suma"]/count($vector);
}

$a=[1,2,3,4,5,6,7];
$s=[];
operar($a,$s);

/*
 * s[
 * "suma","producto","media"
 * ]
 */
echo '<div>Suma:'.$s["suma"].'</div>';
echo '<div>Producto:'.$s["producto"].'</div>';
echo '<div>Media:'.$s["media"].'</div>';