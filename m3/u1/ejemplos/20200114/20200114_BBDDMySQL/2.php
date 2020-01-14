<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if (isset($_GET["tabla"])) {
                // Se conecta a la BBDD
                $bbdd = @new mysqli("127.0.0.1", "root", "", "videoteca");
                if (mysqli_connect_errno()) {
                    printf("Falló la conexión: %s\n", mysqli_connect_error());
                    exit();
                }
                $bbdd->query("SET NAMES 'utf8'");
                $consulta = "SELECT * FROM " . $_GET["tabla"];
                $resultado = $bbdd->query($consulta);

                $r = $resultado->fetch_all(MYSQLI_ASSOC);
                var_dump($r);
                echo '<table width="100%" border="1">';
                echo '<tr>';
                foreach ($r[0] as $key => $value) {
                    echo '<th>' . $key . '</th>';
                }
                echo "</tr>";
                foreach ($r as $linea) {
                    echo "<tr>";
                    foreach ($linea as $campo) {
                        echo '<th>' . $campo . '</th>';
                    }
                    echo "</tr>";
                }
                echo "</table>";
            } else {
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

                $consulta = "SHOW TABLES";
                $resultado = $bbdd->query($consulta);

                echo "<ul>";
                while ($f = $resultado->fetch_array()) {
                    echo "<li>";
                    echo '<a href="' . basename($GLOBALS["_SERVER"]["SCRIPT_FILENAME"]) . '?tabla=' . $f[0] . '">' . $f[0] . '</a>';
                    echo "</li>";
                }
                echo "</ul>";
            }
        ?>
    </body>
</html>
