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
            if (isset($_GET["dibuja"])) {
                $centroX = 0;
                $centroY = 0;
                $color = 0;
                $fondo = 0;
                $ancho = 0;
                $alto = 0;
                $coordenadasPunto1 = "";
                $coordenadasPunto2 = "";
                $puntosPoligono = "";
                $dibujaCirculo = false;
                $dibujaCaja = false;
                $dibujaPoligono = false;
                $redondeada = false;
                
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
                if (isset($_GET["ancho"])) {
                    $ancho = $_GET["ancho"];
                }
                if (isset($_GET["alto"])) {
                    $alto = $_GET["alto"];
                }
                if (isset($_GET["coordenadasPunto1"])) {
                    $coordenadasPunto1 = $_GET["coordenadasPunto1"];
                }
                if (isset($_GET["coordenadasPunto2"])) {
                    $coordenadasPunto2 = $_GET["coordenadasPunto2"];
                }
                if (isset($_GET["redondeada"])) {
                    $redondeada = $_GET["redondeada"];
                }
                if (isset($_GET["puntosPoligono"])) {
                    $puntosPoligono = $_GET["puntosPoligono"];
                }

                if ($centroY != "" and $centroY != "") {
                    $dibujaCirculo = true;
                }

                if (($coordenadasPunto1 != "") and ($coordenadasPunto2 != "")) {
                    $dibujaCaja = true;
                }
                
                if ($puntosPoligono != "") {
                    $dibujaPoligono = true;
                }
                
                if ($dibujaCirculo) {
                    $c = new Circulo([
                        "X" => $centroX,
                        "Y" => $centroY,
                        "Color" => $color,
                        "Fondo" => $fondo,
                        "Ancho" => $ancho,
                        "Alto" => $alto,
                    ]);
                }
                
                if ($dibujaCaja) {
                    $cp1 = explode(",", $coordenadasPunto1);
                    $cp2 = explode(",", $coordenadasPunto2);
                    $p1 = new Punto(["X"=>$cp1[0], "Y"=>$cp1[1]]);
                    $p2 = new Punto(["X"=>$cp2[0], "Y"=>$cp2[1]]);
                    $c = new Caja([
                        "Punto1" => $p1,
                        "Punto2" => $p2,
                        "Color" => $color,
                        "Fondo" => $fondo,
                        "Redondeada" => $redondeada,
                        "Ancho" => $ancho,
                        "Alto" => $alto,
                    ]);
                }
                
                if ($dibujaPoligono) {
                    $c = new Poligono([
                        "Puntos" => $puntosPoligono,
                        "Color" => $color,
                        "Fondo" => $fondo,
                        "Ancho" => $ancho,
                        "Alto" => $alto,
                    ]);
                }
                
                echo '<svg width="' . $ancho . '" height="' . $alto . '">';
                echo $c->dibuja();
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
                          <option value="red">Red</option>
                        <option selected value="green">Green</option>
                        <option value="blue">Blue</option>
                        <option value="yellow">Yellow</option>
                      </select>
                    </div>
                    <div class="form-group form-row col-md-12">
                        <div class="form-group col-md-2">
                            <div>Circulo</div>
                            <div>
                                <label for="inputCentroX">Centro X</label>
                                <script>
                                  let ancho=Number(window.innerWidth);
                                  document.write('<input id="inputCentroX" type="number" name="centroX" min="0" max="'+ ancho +'">');
                                  document.write('<input id="iancho" type="hidden" name="ancho" value="'+ ancho +'">');
                                </script>
                            </div>
                            <div>
                                <label for="inputCentroY">Centro Y</label>
                                <script>
                                  let alto=Number(window.innerHeight);
                                  document.write('<input id="inputCentroY" type="number" name="centroY" min="0" max="'+ alto +'">');
                                  document.write('<input id="ialto" type="hidden" name="alto" value="'+ alto +'">');
                                </script>
                            </div>
                        </div>
                        <div class="form-group col-md-5">
                            <div>
                                <label>Cuadrado</label>
                            </div>
                            <div>
                                <label for="inputCoordenadasPunto1">Coordenadas del punto 1</label>
                                <input id="inputCoordenadasPunto1" type="text" name="coordenadasPunto1">
                            </div>
                            <div>                            
                                <label for="inputCoordenadasPunto2">Coordenadas del punto 2</label>
                                <input id="inputCoordenadasPunto2" type="text" name="coordenadasPunto2">
                            </div>
                            <div>
                                <label for="inputRedondeada">Bordes redondeados</label>
                                <input id="inputRedondeada" type="checkbox" name="redondeada">
                            </div>
                        </div>
                        <div class="form-group col-md-5">
                            <div>
                                <label>Poligono</label>
                            </div>
                            <div>
                                <label for="inputPuntosPoligono">Puntos del poligono</label>
                                <input id="inputPuntosPoligono" type="text" name="puntosPoligono">
                            </div>
                        </div>                    
                    </div>
                    <div class="form-group col-md-4">
                        <button type="submit" class="btn btn-primary" name="dibuja">Dibuja</button>
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
