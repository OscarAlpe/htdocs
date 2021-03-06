<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <!-- <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <title>Funciones Crear Formulario</title>
    </head>
    <body>
        <?php
            require_once 'funciones.php';
            
            $cajas = [ 
                        "nombre" => [
                            "id" => "inombre",
                            "class" => "form-control col-sm-4",
                            "style" => [
                                "background-color"=>"lightgray",
                            ],
                            "value"=>"Mi nombre",
                            "placeholder"=>"Escribe tu nombre",
                            "type"=>"text",
                        ],
                        "apellidos" => [
                            "id" => "iapellidos",
                            "class" => "form-control col-sm-4 text-rigth",
                            "style" => [
                                "background-color"=>"lightgreen",
                            ],
                            "value"=>"Mis apellidos",
                        ],
                        "fecha" => [
                            "id" => "ifecha",
                            "class" => "form-control col-sm-4 text-rigth",
                            "style" => [
                                "background-color"=>"lightblue",
                            ],
                            "value"=>"Fecha",
                            "type"=>"date",
                        ],
                    ];
            
            $radioButtons = [
                        "ciudad" => [
                            "id" => "iciudad",
                            "class" => "form-control col-sm-4",
                            "value"=>"Ciudad",
                            "buttons"=>[
                                [
                                    "id"=>"iSantander",
                                    "value"=>"SA",
                                    "label"=>"Santander",
                                    "style" => [
                                      "background-color"=>"lightgreen",
                                    ],
                                ],
                                [
                                    "id"=>"iPotes",
                                    "value"=>"PO",
                                    "label"=>"Potes",
                                    "style" => [
                                      "background-color"=>"lightblue",
                                    ],
                                ],
                                [
                                    "id"=>"iPalencia",
                                    "value"=>"PA",
                                    "label"=>"Palencia",
                                    "style" => [
                                      "background-color"=>"lightyellow",
                                    ],
                                ],
                            ],
                        ],
                        "calle" => [
                            "id" => "icalle",
                            "class" => "form-control col-sm-4",
                            "value"=>"Calle",
                            "buttons"=>[
                                [
                                    "id"=>"iJuanHerrera",
                                    "value"=>"JH",
                                    "label"=>"Juan de Herrera",
                                    "style" => [
                                      "background-color"=>"lightpink",
                                    ],
                                ],
                                [
                                    "id"=>"iCisneros",
                                    "value"=>"CI",
                                    "label"=>"Cisneros",
                                    "style" => [
                                        "background-color"=>"lightgray",
                                    ],
                                ],
                                [
                                    "id"=>"iCamiloAlonsoVega",
                                    "value"=>"CAV",
                                    "label"=>"Camilo Alonso Vega",
                                ],
                            ]
                        ],
                    ];
            
            $controlesTexto = crearTextos($cajas);
            $controlesRadioButtons = crearRadioButtons($radioButtons);
        ?>
        <div class="m-sm-3" style="border:3px solid grey; padding: 10px 10px;">
            <form name="f" method="get">
                <div class="form-group row">
                    <?= $controlesTexto["nombre"] ?>
                </div>
                <div class="form-group row">
                    <?= $controlesTexto["apellidos"] ?>
                </div>
                <div class="form-group row">
                    <?= $controlesTexto["fecha"] ?>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <?= $controlesRadioButtons["ciudad"] ?>
                    </div>
                </fieldset>
                <fieldset class="form-group">
                    <div class="row">
                        <?= $controlesRadioButtons["calle"] ?>
                    </div>
                </fieldset>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
