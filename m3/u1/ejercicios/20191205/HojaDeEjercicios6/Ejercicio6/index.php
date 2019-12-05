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
        <title>Hoja de ejercicios 6 - Ejercicio 6</title>
    </head>
    <body>
        <?php
            if ($mal) {
                ?>
                <form name="f">
                    <legend>
                        Seleccione la ciudad
                    </legend>
                    <input type="checkbox" name="ciudad[]" id="SS" value="SS" />
                    <label for="SS">Santander</label>
                    <input type="checkbox" name="ciudad[]" id="PO" value="PO" />
                    <label for="PO">Potes</label>
                    <input type="checkbox" name="ciudad[]" id="PA" value="PA" />
                    <label for="PA">Palencia</label>
                    <input type="submit" valuen=Enviar" name="boton" />
                </form>
                <?php
            } else {
                //Crea el array necesario para que funcione el ejemplo aquí
                $ciudades= [
                    "SS" => "santander",
                    "PA" => "palencia",
                    "PO" => "potes",
                ];
                echo "los elementos seleccionados son: ";
                foreach ($_GET["ciudad"] as $value) {
                    echo "<br>$value-$ciudades[$value]"; // muestra codigos
                }
            }
        ?>
    </body>
</html>