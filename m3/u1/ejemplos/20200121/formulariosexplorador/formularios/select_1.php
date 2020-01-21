<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <?php
        var_dump($_GET);
        $numeros=[
            10=>"numero 10",
            12=>"numero 12",
            13=>"numero 13",
            14=>"numero 14"
        ];
        ?>
    </head>
    <body>
        <form>
            <select name="numero[]" multiple>
                <option value="10">Numero 10</option>
                <option value="12">Numero 12</option>
                <option value="13">Numero 13</option>
                <option value="14">Numero 14</option>
            </select>
            <button>Enviar</button>
        </form>
    </body>
</html>

