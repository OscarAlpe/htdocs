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
        <title>Hoja de ejercicios 6 - Ejercicio 5</title>
    </head>
    <body>
        <?php
            if ($mal) {
                ?>
                <form name="f">
                    <select multiple name="ciudad[]">
                        <option value="SS">Santander</option>
                        <option value="PA">Palencia</option>
                        <option value="PO">Potes</option>
                    </select>
                    <input type="submit" valuen=Enviar" name="boton" />
                </form>
                <?php
            } else {
                var_dump($_REQUEST);
                $ciudades= [
                    "SS" => "santander",
                    "PA" => "palencia",
                    "PO" => "potes",
                ];
                foreach ($_REQUEST['ciudad'] as $key => $value) {
                    echo $value."-".$ciudades[$value]."<br>";
                }
            }
        ?>
    </body>
</html>