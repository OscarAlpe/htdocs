<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica 4 - Ejercicio 1</title>
    </head>
    <body>
        <?php
            spl_autoload_register(function ($nombre_clase) {
                include $nombre_clase . '.php';
            });

            use clases\CNumeros;

            if (isset($_GET["enviar"])) {
                $num1 = 0;
                $num2 = 0;
                $num3 = 0;
                
                if (isset($_GET["num1"])) {
                    $num1 = $_GET["num1"];
                }
                if (isset($_GET["num2"])) {
                    $num2 = $_GET["num2"];
                }
                if (isset($_GET["num3"])) {
                    $num3 = $_GET["num3"];
                }
                
                $cnum = new CNumeros([$num1, $num2, $num3]);
                
                $a_num = $cnum->ordena();
                
                echo "Los números ordenados son<br />";
                foreach ($a_num as $value) {
                    echo "$value <br/>";
                }
                
                if ($cnum->getOrdenados()) {
                    echo "Has introducido los números ordenados.";
                } else {
                    echo "Has introducido los números desordenados.";
                }
            } else {
        ?>
                <form action="index.php" method="get">
                    <div>
                        Introduce número 1
                        <input type="number" name="num1">
                    </div>
                    <div>
                        Introduce número 2
                        <input type="number" name="num2">
                    </div>
                    <div>
                        Introduce número 3
                        <input type="number" name="num3">
                    </div>
                    <button name="enviar">Enviar</button>
                </form>
        <?php
            }
        ?>
        
    </body>
</html>
