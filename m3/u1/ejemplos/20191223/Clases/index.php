<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            spl_autoload_register(function ($nombre_clase) {
                include $nombre_clase . '.php';
            });
            
            use clases\Persona;
            use clases\Estudiante;
            use clases\Profesor;
            use clases\Materias;

            $per = new Persona();
            $est = new Estudiante();
            $pro = new Profesor();
            $mat = new Materias();
            
            $est->estudios();
            $pro->estudios();
            echo $est->edad;
            echo $pro->edad;
            
            var_dump($per);
            var_dump($est);
            var_dump($pro);
            var_dump($mat);
        ?>
    </body>
</html>
