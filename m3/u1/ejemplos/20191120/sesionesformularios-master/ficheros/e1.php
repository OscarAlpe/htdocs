<?php

$nombre="datos.txt";
if(file_exists($nombre)){
    $f= fopen($nombre, "a+");
}else{
    $f= fopen($nombre, "w+");
}

fputcsv($f, $_REQUEST);

fclose($f);
?>

