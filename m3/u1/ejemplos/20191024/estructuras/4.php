<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            // array enumerado
            $numeros[0]=23;
            $numeros[10]=33;
            
            // array asociativo
            $colores=[
                "rojo"=>23,
                "azul"=>54,
                "verde"=>3
            ];
            
            foreach ($numeros as $indice=>$valor) {
                echo "<div>$indice:$valor</div>";
            }
            
            foreach ($colores as $indice => $valor) {
                echo "<div>$indice:$valor</div>";
            }
            
            // acceder a un elemento del array
            echo $colores["rojo"];
        ?>
    </body>
</html>
