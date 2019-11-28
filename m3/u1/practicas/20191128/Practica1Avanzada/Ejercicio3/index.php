<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica 1 avanzada - Ejercicio 3</title>
        <script type="javascript">
           var miLinea = document.getElementById("miLinea");
           
           miLinea.onclick = function(){
               var valorAnchura = Math.floor(Math.random() * 10) + 1;
               
               window.location.href = "index.php?anchura=" + valorAnchura;
           };
        </script>
    </head>
    <body>
        <?php
            $longitud = rand(1, 100);
            if (isset($_GET["anchura"])) {
                $anchura = $_GET["anchura"];
            }
            
            print "<p>Longitud: $longitud</p>";
        ?>
        <svg width="<?= $longitud ?>px" height="10px">
            <?php
                echo '<line id="miLinea" x1="1" y1="5" x2="' . $longitud . '" y2="5" stroke="red" stroke-width="10" >';
            ?>
        </svg>
    </body>
</html>