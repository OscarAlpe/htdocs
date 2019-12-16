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
        <title>Hoja de ejercicios 6 - Ejercicio 7</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Bootstrap -->
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script> -->
        <script src="js/jquery-1.12.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script> -->
        <script src="js/bootstrap.min.js"></script>
        <?php
            if ($mal) {
        ?>
            <div class="modal-dialog">
                <form name="f">
                    <fieldset class="form-group">
                    <legend>Seleccione la ciudad</legend>
                    <div class="input-group">
                        <input type="radio" name="ciudad[]" id="SS" value="SS"/>
                        <label for="SS">Santander</label>
                    </div>
                    <div class="input-group">
                        <input type="radio" name="ciudad[]" id="PO" value="PO" />
                        <label for="PO">Potes</label>
                    </div>
                    <div class="input-group">
                        <input type="radio" name="ciudad[]" id="PA" value="PA" />
                        <label for="PA">Palencia</label>
                    </div>
                    <div>
                        <input class="btn btn-success" type="submit" value="Enviar" name="boton" />
                    </div>
                    </fieldset>
                </form>
            </div>
        <?php
            } else {
                //Crea el array necesario para que funcione el ejemplo aquí
                $ciudades= [
                    "SS" => "santander",
                    "PA" => "palencia",
                    "PO" => "potes",
                ];
                if (isset($_GET["ciudad"])) {
                    echo "los elementos seleccionados son: ";
                    foreach ($_GET["ciudad"] as $value) {
                        echo "<br>$value-$ciudades[$value]"; // muestra codigos
                    }
                } else {
                    echo "No se ha seleccionado ningún elemento.";
                }
            }
        ?>
    </body>
</html>