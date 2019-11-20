<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $imagenes=[
            ["png","logo_facebook.png"],
            ["png","logo_youtube.png"],
            ["gif","0.gif"],
            ["jpg","infor.jpg"],
            ["png","logo_twitter.png"],
            
        ];
        
        foreach($imagenes as $foto){
        ?>
        <img src="imagen1.php?nombre=imgs/<?=$foto[1];?>&tipo=<?=$foto[0];?>">
        <br>
        <?php
            
        }
        ?>
        
        
    </body>
</html>