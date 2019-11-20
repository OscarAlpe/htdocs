<?php
function crearFormulario($datos){
    echo '<form class="form-horizontal">';
    foreach ($datos as $key => $value) {
        control($key,$value);
    }
    echo "</form>";
}

function control($k,$v){
    $nombre=$k;
    $tipo="text";
    $placeholder=" ";
    $id=" ";
    $texto=" ";
    extract($v);
    if($tipo!="submit"){
        echo '<div class="form-group">';
        echo "<label for=\"$id\" class=\"col-sm-2 control-label\">$texto</label>";
        echo '<div class="col-sm-10">';
        echo "<input type=\"$tipo\" class=\"form-control\" id=\"$id\" name=\"$nombre\" placeholder=\"$placeholder\">";
        echo "</div></div>";
    }else{
        echo '<div class="form-group">';
        echo '<div class="col-sm-offset-2 col-sm-10">';
        echo "<button name=\"$nombre\" type=\"$tipo\" class=\"btn btn-default\">$texto</button>";
        echo "</div></div>";
    }
}

function crearModal($r){
   echo '<div id="ventana" class="modal fade" tabindex="-1" role="dialog"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    echo '<h4 class="modal-title">' . $r["titulo"] . '</h4>';
    echo '</div><div class="modal-body">';
    echo "<ul>";
    
    foreach($r["datos"] as $v){
            echo "<li>$v</li>";
    }
    echo'</ul></div></div></div></div>';
}

function listadoRegistros($r){
  echo '<form method="get" class="row">';
  foreach($r as $indice=>$registro){
    echo '<div class="col-sm-6 col-md-4">';
    echo '<div class="thumbnail"><div class="caption">';
    echo '<h3>Registro numero ' . $indice . '</h3><ul>';
    foreach($registro as $k=>$v){
         echo "<li>$k:$v</li>";
    }
        echo '</ul><p><button class="btn btn-primary" name="eliminar" value="' . $indice .'" role="button">Eliminar</button></p>';
        echo "</div></div></div>";
  }
  echo "</form>";
}
