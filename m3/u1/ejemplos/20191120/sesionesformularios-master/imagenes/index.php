<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $imagenes=[
            "logo_facebook.png",
            "logo_twitter.png",
            "logo_youtube.png",
            "0.gif",
            "infor.jpg"
        ];
        
        foreach($imagenes as $foto){
        ?>
        <img src="imgs/<?=$foto;?>">
        <?php
            
        }
        ?>
        
        
    </body>
</html>
