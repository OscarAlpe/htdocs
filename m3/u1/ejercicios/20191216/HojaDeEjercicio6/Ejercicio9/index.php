<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de ejercicios 6 - Ejercicio 9</title>
    </head>
    <body>
        <?php
            if (isset($_GET["enviar"])) {
                $ciudades = [ "", "Amsterdam", "Buenos Aires", "Delphi",
                              "Hong Kong", "London", "Los Angeles", "Moscu",
                              "Mumbai", "New York", "Sao Paulo", "Tokyo",
                            ];
                $ciudad = "";
                
                if (isset($_GET["ciudad"])) {
                    $ciudad = $_GET["ciudad"];
                }
                
                echo "Se ha seleccionado " . $ciudades[$ciudad];
            } else {
        ?>
            <form action="index.php" method="get">
                <select name="ciudad">
                    <optgroup label="Asia">
                        <option value="3">Delhi</option>
                        <option value="4">Hong Kong</option>
                        <option value="8">Mumbai</option>
                        <option value="11">Tokyo</option>
                    </optgroup>
                    <optgroup label="Europe">
                        <option value="1">Amsterdam</option>
                        <option value="5">London</option>
                        <option value="7">Moscow</option>
                    </optgroup>
                    <optgroup label="North America">
                        <option value="6">Los Angeles</option>
                        <option value="9">New York</option>
                    </optgroup>
                    <optgroup label="South America">
                        <option value="2">Buenos Aires</option>
                        <option value="10">Sao Paulo</option>
                    </optgroup>
                </select>
                <button name="enviar">Enviar</button>
            </form>
        <?php
            }
        ?>
    </body>
</html>
