<?php
    if ($_REQUEST) {
        $mal = false;
    } else {
        $mal = true;
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja de ejercicios 6 - Ejercicio 3</title>
    </head>
    <body>
        <?php
            if ($mal) {
                ?>
                <form name="f">
                    <select name="ciudad">
                        <option value="0">Santander</option>
                        <option value="1">Palencia</option>
                        <option value="2">Potes</option>
                    </select>
                    <input type="submit" valuen=Enviar" name="boton" />
                </form>
                <?php
            } else {
                var_dump($_REQUEST);
                $ciudades=array("santander", "palencia", "potes");
                echo $ciudades[$_REQUEST['ciudad']];
            }
        ?>
    </body>
</html>
