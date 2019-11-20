<?php
    if(!file_exists("contador.txt")){
        $f=fopen("contador.txt","w");
        $contador=0;
        fputs($f,$contador);
    }else{
       $f=fopen("contador.txt","r+");
       $contador=fgets($f);
       $contador++;
       rewind($f);
       fwrite($f,$contador);
    }
    fclose($f);
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
