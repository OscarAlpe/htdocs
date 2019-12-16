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
        <title>Hoja de ejercicios 6 - Ejercicio 8</title>
    </head>
    <body>
        <?php
            if ($mal) {
        ?>
                <form name = "f">
                    <legend>
                        Seleccione la ciudad
                    </legend>
                    <input type="radio" name="ciudad" id="SS" value="SS"/>
                    <label for="SS">Santander</label>
                    <input type="radio" name="ciudad" id="PO" value="PO" />
                    <label for="PO">Potes</label>
                    <input type="radio" name="ciudad" id="PA" value="PA" />
                    <label for="PA">Palencia</label>
                    <input type="submit" value="Enviar" name="boton" />
                </form>
        <?php
            } else {
                $ciudades= [
                    "SS" => "santander",
                    "PA" => "Palencia",
                    "PO" => "Potes",
                ];
                echo "el elemento seleccionado es ";
                echo $ciudades[$_REQUEST["ciudad"]];
            }
        ?>
    </body>
</html>
