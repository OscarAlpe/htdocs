<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <?php
            $poblaciones=[
                "sa"=>"Santander",
                "po"=>"Potes",
                "la"=>"Laredo"
            ];
            var_dump($_GET);
            foreach ($_GET["Poblacion"] as $v) {
                  echo $poblaciones[$v];
    
            }
            
        ?>
    <body>
        <form>
            <div>Indica la poblacion</div>
            <?php
                    foreach ($poblaciones as $key => $value) {
            ?>
                        <label for="i<?= $value ?>"><?= $value ?></label>
                        <input type="checkbox" name="Poblacion[]" value="<?= $key ?>" id="i<?= $value ?>"/>
            <?php
                    }
            ?>
            
            
            <button>Enviar</button>
        </form>
        
        

    </body>
</html>