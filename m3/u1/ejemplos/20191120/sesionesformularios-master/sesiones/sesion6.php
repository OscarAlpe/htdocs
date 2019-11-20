<?php

session_start();

echo session_id(); // muestra el id de sesion
echo "<br>";
echo session_name(); // mostrar el nombre de la cookie que utilizan las sesiones
var_dump ($_COOKIE[session_name()]); //mostrar el id  de la sesion
var_dump($_SESSION); // mostrar todas las variables de sesion




