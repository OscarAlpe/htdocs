<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
        $b=0;
    
        function ejemplo(&$a){
            $a=10;
        }
        
        ejemplo($b);
        echo $b;
        ?>
    </body>
</html>
