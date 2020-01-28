<?php

namespace clases;

/**
 * Description of BaseDatos
 *
 * @author Oscar
 */

use mysqli;

class BaseDatos {
    private $conexion;
    
    public function __construct($host, $usuario, $contrasena, $nombre) {
        // Se conecta a la BBDD examen1 (examen ya existía)
        $this->conexion = @new mysqli($host, $usuario, $contrasena, $nombre);;
        if (mysqli_connect_errno()) {
            printf("Falló la conexión: %s\n", mysqli_connect_error());
            exit();
        }
    }
    
    public function devuelveAleatorio($consulta, $campo) {
        $salida = "";
               
        // Ejecuta el query
        $resultado = $this->conexion->query($consulta);
        $salidaArray = $resultado->fetch_all(MYSQLI_ASSOC);
        $r = rand(0, count($salidaArray) - 1);
        $salida = $salidaArray[$r][$campo];
        
        return $salida;
    }

}
