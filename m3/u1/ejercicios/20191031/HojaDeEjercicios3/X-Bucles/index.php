<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 3 / X - Bucles</title>
    </head>
    <body>
        <?php
            if (isset($_GET["enviar"])) {
                $nota=[];
                $suma=0;
                $i=0;
                $media=0;
                
                $nota[0]=$_GET["nota1"];
                $nota[1]=$_GET["nota2"];
                $nota[2]=$_GET["nota3"];
                $nota[3]=$_GET["nota4"];
                $nota[4]=$_GET["nota5"];                
                $nota[5]=$_GET["nota6"];                
                $nota[6]=$_GET["nota7"];                
                $nota[7]=$_GET["nota8"];                
                $nota[8]=$_GET["nota9"];                
                $nota[9]=$_GET["nota10"];                

                while ($i<10) {
                    $suma=$suma+$nota[$i];
                    $i++;
                }
                
                $media=$suma/10;
                echo "La media es $media";
            } else {
        ?>
                <form action="index.php" method="get">
                    <div>
                        Nota 1
                        <input name="nota1" type="number">
                    </div>
                    <div>
                        Nota 2
                        <input name="nota2" type="number">
                    </div>
                    <div>
                        Nota 3
                        <input name="nota3" type="number">
                    </div>
                    <div>
                        Nota 4
                        <input name="nota4" type="number">
                    </div>
                    <div>
                        Nota 5
                        <input name="nota5" type="number">
                    </div>
                    <div>
                        Nota 6
                        <input name="nota6" type="number">
                    </div>
                    <div>
                        Nota 7
                        <input name="nota7" type="number">
                    </div>
                    <div>
                        Nota 8
                        <input name="nota8" type="number">
                    </div>
                    <div>
                        Nota 9
                        <input name="nota9" type="number">
                    </div>
                    <div>
                        Nota 10
                        <input name="nota10" type="number">
                    </div>
                    <button name="enviar">Enviar</button>
                </form>
        <?php
            }
        ?>
    </body>
</html>
