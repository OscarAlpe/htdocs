<?php
    if(!file_exists("contador1.txt")){
        $contador=0;
        file_put_contents("contador1.txt",$contador);
    }else{
       $contador= file_get_contents("contador1.txt");
       $contador++;
       file_put_contents("contador1.txt",$contador);
    }
?>
<!DOCTYPE html>
<style type="text/css">
    .caja{
        background-color: #ccc;
        width:100px;
        height:100px;
        margin:10px auto;
        line-height: 100px;
        font-size: 28px;
        text-align: center;
    }
    
</style>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="caja">
            <?php
            echo $contador;
            ?>
        </div>
    </body>
</html>
