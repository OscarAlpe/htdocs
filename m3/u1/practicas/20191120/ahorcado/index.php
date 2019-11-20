<?php
    if(!isset($_SESSION["ahorcado"])){
    session_start();
    $palabra= "prueba mas larga";
    }
    require_once 'funciones.php';
?>

<html>
    <head>
        <title>Ahorcado</title>
        <style>
            div {
                display: inline;
            }
            .fallos{
                color: red;
            }
        </style>
    </head>
    <body>
        <?php
        
            if(isset($_GET["envio"])){

                $intento=$_GET["letra"];

                if(!isset($_SESSION["intentos"])){
                    $_SESSION["intentos"]="";
                }
                
                if(!isset($_SESSION["aciertos"])){
                    $_SESSION["aciertos"]="";
                }
                
                if(!isset($_SESSION["fallos"])){
                    $_SESSION["fallos"]="";
                }
                
                $_SESSION["intentos"].= $intento;
                
                $encontrados = existe_caracter($palabra,$_SESSION["intentos"]);
                
                $_SESSION["aciertos"] = separa_caracteres(crea_acertados($palabra,$encontrados));
                
                if (!existe_caracter($palabra,$intento)){
                    $_SESSION["fallos"].=$intento;
                }

                echo '<pre>'.$_SESSION["aciertos"].'</pre>';
            }
       
        ?>

        
        
        <p>
            <form>
                <label for="letra">Introduce una letra</label>
                <input type="text" name="letra">
                <button name="envio">Enviar</button>
            </form>
        </p>
              

                
        
        <?php
            if(isset($_SESSION["fallos"])){
            //$salida=0;
            //for ($i=0;$i<strlen($_SESSION["fallos"]);$i++){
                echo '<div class="fallos">'.$_SESSION["fallos"].'</div>';
                //echo '<div class="fallos">'.$salida.' '.'</div>';
            }
        ?>
        
    </body>
</html>
