<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Ejercicios 10 - Ejercicio 1</title>
    </head>
    <body>
        <?php
            $consulta;
            $bbdd;
            $consulta;
            $resultado;
            $salidaArray;
            
            // Se conecta a la BBDD
            $bbdd = @new mysqli("127.0.0.1", "root", "", "videoteca");
            if (mysqli_connect_errno()) {
                printf("Falló la conexión: %s\n", mysqli_connect_error());
                exit();
            }
            var_dump($bbdd);
            
            $consulta = "SELECT * FROM actor";
            
            // Ejecuta el query
            $resultado = $bbdd->query($consulta);
            var_dump($resultado);
            
            // Lee todos los registros en un array númerico
            $salidaArray = $resultado->fetch_all();
            var_dump($salidaArray);
            
            // Rebobina al primer registro
            $resultado->data_seek(0);
            
            // Lee todos los registros en un array asociativo
            $salidaArray = $resultado->fetch_all(MYSQLI_ASSOC);
            var_dump($salidaArray);
            
            // Rebobina al primer registro
            $resultado->data_seek(0);
            
            // Muestra primer registro
            $salidaArray = $resultado->fetch_assoc();
            var_dump($salidaArray);
            
            // Muestra segundo registro
            $salidaArray = $resultado->fetch_assoc();
            var_dump($salidaArray);
            
        ?>
    </body>
</html>
