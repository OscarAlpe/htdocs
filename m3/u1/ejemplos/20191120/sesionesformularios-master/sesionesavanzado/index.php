<?php
    session_start();
    if(!isset($_SESSION["datos"])){
        $_SESSION["datos"]=[];
    }
    include "componentes/componentes.php"
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <div class="container">
    <div class="page-header">
        <h1>Ejemplo de clase <small>Trabajo con sesiones</small></h1>
    </div>
 <?php
    function accionIndex(){
        include "views/formulario.php";
        include "views/listado.php";
    }
    
    function accionEliminar($n){
        unset($_SESSION["datos"][$n]);
        accionIndex();
    }
    
    function accionComprobar(){
        $errores=[];
        $hoy=date("Y");
        $anno_fecha=explode("-",$_REQUEST["fecha"])[0];
        
        if(strlen($_REQUEST["nombre"])==0 || strlen($_REQUEST["nombre"])>5){
            $errores[]="El nombre esta mal";
        }
       
        if($anno_fecha==$hoy || $anno_fecha<=$hoy-10){
          $errores[]="La fecha es incorrecta"; 
        }
        
        if(count($errores)==0){
            unset($_REQUEST["anadir"]);
            $_SESSION["datos"][]=$_REQUEST;
        }else{
            $resultados=[
                "titulo"=>"errores",
                "datos"=>$errores
            ];
            include "views/errores.php";
            
        }
        accionIndex();
    }
    
    if(isset($_REQUEST["anadir"])){
        accionComprobar();
    }elseif(isset($_REQUEST["eliminar"])){
        accionEliminar($_REQUEST["eliminar"]); 
    }else{
        accionIndex();
    }
    
 ?>
        
        </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
