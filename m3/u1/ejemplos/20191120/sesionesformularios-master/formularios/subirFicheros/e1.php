<?php
$archivo = (isset($_FILES['archivo'])) ? $_FILES['archivo'] : null;
if ($archivo) {
   var_dump($_FILES);
   $ruta_destino_archivo = "./{$archivo['name']}";
   echo pathinfo($ruta_destino_archivo,PATHINFO_EXTENSION);
   $archivo_ok = move_uploaded_file($archivo['tmp_name'], $ruta_destino_archivo);
}
?>
<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Subir archivos </title>
 </head>
 <body>
    <?php if (isset($archivo)): ?>
       <?php if ($archivo_ok): ?>
          <strong> El archivo ha sido subido correctamente. </strong>
       <?php else: ?>
          <span style="color: #f00;"> Error al intentar subir el archivo. </span>
       <?php endif; ?>
    <?php endif; ?>
    <form method="post" action="" enctype="multipart/form-data">
       <label> Archivo </label>
       <input type="file" name="archivo" required="required" />
       <input type="submit" value="Subir" />
    </form>
 </body>
</html>
Al código html final
