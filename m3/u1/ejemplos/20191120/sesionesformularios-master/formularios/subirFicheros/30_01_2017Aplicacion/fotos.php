<?php
$todasFotos = array_diff(scandir(RUTA), array('..', '.')); //le quito . y ..
$paginaFotos= array_chunk($todasFotos, FOTOSPORPAGINA);
$fotosPorFila=2;
$contador=1;
//comprobar si existe esa pagina de fotos solicitada
if($_SESSION["pagina"]>count($paginaFotos)){
    $_SESSION["pagina"]--;
}elseif($_SESSION["pagina"]==0){
    $_SESSION["pagina"]=1;
}
foreach ($paginaFotos[$_SESSION["pagina"]-1] as $foto) {
$contador++;
if($contador==$fotosPorFila){
    echo '<div class="fila">';
    $contador=0;
}
?>
<div class="celda">
<img src="fotos/<?= $foto ?>" height="100">
</div>
<?php
if($contador==1){
    echo '</div>';
}

}
if(count($paginaFotos[$_SESSION["pagina"]-1])%2){
    echo "</div>";
}


?>

