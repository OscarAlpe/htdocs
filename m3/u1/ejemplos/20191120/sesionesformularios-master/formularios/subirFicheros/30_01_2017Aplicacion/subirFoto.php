<?php
    $archivo=$_FILES["fichero"];
    $ruta_destino_archivo = RUTA . "/" . $archivo['name'];
    $archivo_ok = move_uploaded_file($archivo['tmp_name'], $ruta_destino_archivo);
?>

