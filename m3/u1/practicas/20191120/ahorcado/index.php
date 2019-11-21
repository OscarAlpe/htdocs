<?php
    session_start();
    require_once 'funciones.php';
    
    if (!isset($_SESSION["ahorcado"])) {
        $_SESSION["ahorcado"] = generateRandomString(rand(3, 5));
    }
    
    $imagenesAhorcado=[
        "cabeza",
        "cuerpo",
        "brazoizq",
        "brazoder",
        "piernaizq",
        "piernader",
        "cabezamuerta"
    ];
    $salidaAhorcado="";
?>

<html>
    <head>
        <title>Ahorcado</title>
        <link rel="stylesheet" href="css/main.css"/>
    </head>
    <body>
        <?php
            $_SESSION["mostrarFormulario"] = true;
        
            if (isset($_GET["envio"])) {

                $intento = $_GET["letra"];

                if (!isset($_SESSION["intentos"])) {
                    $_SESSION["intentos"] = "";
                }
                
                if (!isset($_SESSION["fallos"])) {
                    $_SESSION["fallos"] = "";
                }
                
                $_SESSION["intentos"] .= $intento;
                
                $palabra = $_SESSION["ahorcado"];
                
                $encontrados = existe_caracter($palabra, $_SESSION["intentos"]);
                
                $aciertos = separa_caracteres(crea_acertados($palabra, $encontrados));
                
                if (existe_caracter($palabra, $intento) == []){
                    $_SESSION["fallos"] .= $intento;
                }

                echo '<pre>' . $aciertos . '</pre>';
                
                if (strlen($palabra) == count($encontrados)) {
                    echo "¡ACERTASTE!";
                    unset($_SESSION["ahorcado"]);
                    unset($_SESSION["intentos"]);
                    unset($_SESSION["fallos"]);
                    $_SESSION["mostrarFormulario"] = false;
                }
            for($c=0;$c<strlen($_SESSION["fallos"]);$c++){
                        $salidaAhorcado.='<div id="' . $imagenesAhorcado[$c] . '"> </div>';
            }
            if (strlen($_SESSION["fallos"]) == 6)  {
                $salidaAhorcado.='<div id="' . $imagenesAhorcado[6] . '"> </div>';
                echo "¡PERDISTE!";
                unset($_SESSION["ahorcado"]);
                unset($_SESSION["intentos"]);
                unset($_SESSION["fallos"]);
                $_SESSION["mostrarFormulario"] = false;
            }
            } else {
                echo '<pre>' . separa_caracteres(crea_acertados($_SESSION["ahorcado"], [])) . '</pre>';
            }
            

       
        ?>
        <?php
            if ($_SESSION["mostrarFormulario"]) {
        ?>
                <p>
                    <form>
                        <label for="letra">Introduce una letra</label>
                        <input type="text" name="letra" maxlength="1" size="1">
                        <button name="envio">Enviar</button>
                    </form>
                </p>
        <?php
            } else {
        ?>
                <p>
                    <form>
                        <button name="reiniciar">Otra partida</button>
                    </form>
                </p>
        <?php
            }
        ?>
        <?php
            if (isset($_SESSION["fallos"])) {
                echo '<div class="fallos">'.separa_caracteres($_SESSION["fallos"]).'</div>';
            }
        ?>
                <div class="imagen">
                    <div id="fondo">
                        <?= $salidaAhorcado ?>
                    </div> 
                </div>
    </body>
</html>
