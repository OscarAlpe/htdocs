<?php

namespace clases;

/**
 * Description of Conexion
 *
 * @author Oscar
 */
class Conexion {
    private $host;
    private $usuario;
    private $contrasena;
    private $bbdd;
    private $conexion;
    private $resultado;
    private $tabla;
    private $campos;
    
    public function __construct($host = "127.0.0.1", $usuario = "root", $contrasena = "", $bbdd = "") {
        $this->host = $host;
        $this->usuario = $usuario;
        $this->contrasena = $contrasena;
        $this->bbdd = $bbdd;
                
        $this->conecta();
    }
    
    public function conecta() {
        if (empty($this->bbdd)) {
            $this->conexion = new \mysqli($this->host, $this->usuario, $this->contrasena);
        } else {
            $this->conexion = new \mysqli($this->host, $this->usuario, $this->contrasena, $this->bbdd);
        }
        
        if (mysqli_connect_errno()) {
            printf("Falló la conexión: %s\n", mysqli_connect_error());
            exit();
        }
        
        return $this->conexion;
    }
    
    public function consulta($sql) {
        $this->resultado = $this->conexion->query($sql);
        return $this->resultado;
    }
    
    public function coge_todos($tipo = MYSQLI_NUM) {
        return $this->resultado->fetch_all($tipo);
    }
    
    public function seleccionar($db){
        $this->conexion->select_db($db);
        $this->castellano();
    }
    
    public function castellano() {
        $this->consulta("SET NAMES 'utf8'");
    }
    
    public function __destruct() {
        $this->conexion->close();
    }
    
    public function getTabla() {
        return $this->tabla;
    }

    public function getCampos() {
        return $this->campos;
    }

    public function setTabla($tabla) {
        $this->tabla = $tabla;
        return $this;
    }

    public function setCampos($campos) {
        $this->campos = $campos;
        return $this;
    }

    public function consultaCamposTabla() {
        $consulta = "SELECT $this->campos FROM $this->tabla";
        $this->resultado = $this->consulta($consulta);
    }
    
    public function listar_registros() {
        $tabla = "";
        
        $tabla = '<table border="1"';
        $tabla .= "<tr>";
        $a = $this->coge_todos(MYSQLI_ASSOC);
        foreach ($a[0] as $key => $value) {
            $tabla .= "<th>$key</th>";
        }
        $tabla .= "</tr>";

        foreach ($a as $registro) {
            $tabla .= "<tr>";
            foreach ($registro as $campo) {
                $tabla .= "<th>$campo</th>";
            }
            $tabla .= "</tr>";
        }

        $tabla .= "</table>";
        $this->resultado->data_seek(0);
        return $tabla;
    }
}
