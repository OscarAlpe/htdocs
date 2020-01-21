<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <?php
            var_dump($_GET);
        ?>
    <body>
        <form>
            <div>Indica la poblacion</div>
            <label for="iSantander">Santander</label>
            <input type="checkbox" name="Poblacion[]" value="Santander" />
            <label for="iPotes">Potes</label>
            <input type="checkbox" name="Poblacion[]" value="Potes" />
            <label for="iLaredo">Laredo</label>
            <input type="checkbox" name="Poblacion[]" value="Laredo" />
            <button>Enviar</button>
        </form>

    </body>
</html>