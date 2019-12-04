<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica 1 avanzada - Ejercicio 8</title>
        <script type="text/javascript">
            function ocultaCirculo(event) {
                //event.target.setAttribute("visibility", "hidden");
                event.target.setAttribute("style", "display:none");
            }
        </script>
    </head>
    <body>
        <?php
            function calculoColor() {
                return "rgb(".rand(0, 255).",".rand(0, 255).",".rand(0, 255).")";
            }
            
            function dibujaCirculo($x, $y) {
                echo "<circle cx=\"$x\" cy=\"$y\" r=\"50\" fill=\"" . calculoColor() . "\" onClick=\"ocultaCirculo(event)\" />";
            }
        ?>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1000px" height="1000px" style="display:block;margin:0px auto">
             <?php
                dibujaCirculo(100, 100);
                dibujaCirculo(50, 300);
                dibujaCirculo(230, 60);
             ?>
        </svg>
    </body>
</html>
