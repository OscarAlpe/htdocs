<!DOCTYPE html>
<?php
define("RUTA",'./fotos');
define("FOTOSPORPAGINA",4);
session_start();
if(isset($_REQUEST["pagina"])){
    if($_REQUEST["pagina"]=='mas'){
        $_SESSION["pagina"]++;
    }else{
        $_SESSION["pagina"]--;
    }
    
}else {
    $_SESSION["pagina"]=1;
    
}


if(isset($_REQUEST["foto"])){
    // añadir la foto
    require 'subirfoto.php';
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            .total-celda{
                display:table-cell;
                vertical-align: middle;
                text-align: center;
                    
            }
            .total-tabla{
                display:table;
                width:1000px;
                margin:10px auto;
            }
            
            a{
                font-size: 25px;
                font-family: fantasy;
            }
            
            a:link{
                color:#000;
                text-decoration: none;
            }
            
            a:hover{
                color:#FF02a9;
            }
            .fotos{
                display:table;
                width:900px;
                margin:10px auto;
                background-color: #C5C5EC;
                min-height: 100px;
                border-spacing: 10px;
                
            }
            .fotos>div{
                display:table-row;
            }
            .fotos>div>.celda{
                display:table-cell;
                text-align: center;
                
            }
            input[type=file]{
                z-index: 999;
                line-height: 0px;
                font-size: 18px;
                position: absolute;
                opacity: 0;
                left:0px;
                height:30px;
                width:290px
            }

            label{
                float: left;
            }
            label,input[type=submit]{
                text-align: center;
                background-color: #8E789B;
                color: #fff;
                display: block;
                border-radius: 3px;
                width: 290px;
                height: 30px;
                font-size: 18px;
                line-height: 1.6em;
            }
            input[type=submit]{
                margin-top:10px;
            }
            br.borra{
                clear:both;
            }
            img{
                border: 1px solid #bbb;
                border-radius: 10px;
                -webkit-box-shadow: 18px 26px 52px -6px rgba(110,109,110,1);
                -moz-box-shadow: 18px 26px 52px -6px rgba(110,109,110,1);
                box-shadow: 18px 26px 52px -6px rgba(110,109,110,1);
            }
        </style>
        <script src="fotos.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="total-tabla">
        <div class="total-celda">
            <a href="#"><</a>
        </div>
        <div class="total-celda">
        <div class="fotos">
          <?php require 'fotos.php'; ?>
          
        </div>
        </div>
        <div class="total-celda">
            <a href="#">></a>
        </div>
        </div>
        <?php
        require './formulario.php';
        ?>
    </body>
</html>
