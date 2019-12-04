<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica 2 avanzada - Ejercicio 1</title>
    </head>
    <body>
        <?php
           $dado1=rand(1,6); 
           $dado2=rand(1,6); 
            
           $ancho=280;
           $alto=140;
        ?>
        <div style="width:<?=$ancho?>;height:<?=$alto?>">
            <img src="<?=$dado1?>.svg">
            <img src="<?=$dado2?>.svg">
        </div>
        <span>
            Total:
            <span style="border: 1px solid black; font-size: 40px">
                &nbsp;<?= $dado1+$dado2 ?>&nbsp;
            </span>
        </span>
    </body>
</html>
