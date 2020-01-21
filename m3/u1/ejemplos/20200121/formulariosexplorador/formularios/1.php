<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo 1</title>
        <?php
            if(isset($_GET["boton1"])){
                var_dump($_GET);
            }
        ?>
    </head>
    <body>
        <form>
            <div>
            <label for="inombre">Nombre</label>
            <input type="text" name=nombre" id="inombre">
            </div>
            <div>
            <label for="iapellidos">Apellidos</label>
            <input type="text" name="apellidos" id="iapellidos">
            </div>
            <div>
            <label for="inumero1">Numero 1</label>
            <input type="number" name="numero[]" id="inumero1">
            </div>
            <div>
            <label for="inumero2">Numero 2</label>
            <input type="number" name="numero[]" id="inumero2">
            </div>
            <input type="submit" value="Enviar" name="boton1" />
        </form>
    </body>
</html>

