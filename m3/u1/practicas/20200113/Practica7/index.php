<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Práctica 7</title>
    </head>
    <body>
        <?php
            spl_autoload_register(function ($nombre_clase) {
                include $nombre_clase . '.php';
            });
            
            use clases\Fichero;
            
            $f = new Fichero("C:\\windows\\temp\\prueba", "r+");
            echo "<pre>";
            $f->abrirFichero();
            //$f->escribirCadena("Esto es una prueba");
            //$f->escribirLinea("Esto es una linea");
            //$f->escribirLinea("Esto es otra linea");
            //echo $f->leer();
            //echo $f->leerLinea();
            $f->leerFicheroArray();
            var_dump($f->getContenidoFichero());
            $f->moverPuntoDeterminado(4);
            $f->leerFicheroString();
            echo $f->getContenidoFichero();
            $f->cerrarFichero();
            echo "</pre>";
            //$f->escribir("Esta es una prueba");
            //$f->escribir("Esta es otra prueba");
        ?>
    </body>
</html>
