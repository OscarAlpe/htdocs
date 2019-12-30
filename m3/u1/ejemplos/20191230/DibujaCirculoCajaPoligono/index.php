<?php
spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

use clases\Figura;
use clases\Punto;
use clases\Caja;
use clases\Circulo;
Use clases\Poligono;

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio dibujar Circulos, Caja y Poligono</title>
        <!-- Required meta tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <?php
            if (isset($_GET["dibujaCirculo"])) {
                $centroX = 0;
                $centroY = 0;
                $color = 0;
                $fondo = 0;
                
                
                if (isset($_GET["color"])) {
                    $color = $_GET["color"];
                }
                if (isset($_GET["fondo"])) {
                    $fondo = $_GET["fondo"];
                }
                if (isset($_GET["centroX"])) {
                    $centroX = $_GET["centroX"];
                }
                if (isset($_GET["centroY"])) {
                    $centroY = $_GET["centroY"];
                }

                $c = new Circulo([
                    "X" => $centroX,
                    "Y" => $centroY,
                    "Color" => $color,
                    "Fondo" => $fondo,
                ]);

                echo '<svg width="1280" height="1280">';
                echo $c->dibujaSVG();
                echo '</svg>';
            } else {
        ?>
                <form action="index.php" method="get">
                    <div class="form-group col-md-4">
                      <label for="inputColor">Color</label>
                      <select id="inputColor" class="form-control" name="color">
                        <option selected value="red">Red</option>
                        <option value="green">Green</option>
                        <option value="blue">Blue</option>
                        <option value="yellow">Yellow</option>
                      </select>
                    </div>                    
                    <div class="form-group col-md-4">
                      <label for="inputFondo">Fondo</label>
                      <select id="inputFondo" class="form-control" name="fondo">
                          <option selected value="red">Red</option>
                        <option value="green">Green</option>
                        <option value="blue">Blue</option>
                        <option value="yellow">Yellow</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputCentroX">Centro Y</label>
                      <input id="inputCentroX" type="number" name="centroX">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputCentroY">Centro Y</label>
                      <script>
                      let ancho=Number(window.innerWidth);
                      document.write('<input id="inputCentroY" type="number" name="centroY" min="0" max="'+ ancho +'">');
                      </script>
                          
                      
                    </div>
                    <div class="form-group col-md-4">
                        <button type="submit" class="btn btn-primary" name="dibujaCirculo">Dibuja circulo</button>
                    </div>
                </form>
        <?php
            }
        ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
