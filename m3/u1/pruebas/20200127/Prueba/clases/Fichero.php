<?php

namespace clases;

/**
 * Description of Fichero
 *
 * @author Oscar
 */

class Fichero {
    public $nombre;
    private $modo;
    private $puntero;
    private $linea;
    private $contenidoFichero;
    private $contenido;
    
    public function __construct($nombre, $modo="r+") {
        $this->setNombre($nombre, $modo);
    }
    
    public function getNombre() {
        return $this->nombre;
    }
    
    public function setNombre($nombre, $modo="r+") {
        $this->nombre = $nombre;
        $this->modo = $modo;
        $this->abrirFichero();
    }
    
    private function getPuntero() {
        return $this->puntero;
    }
    
    private function setPuntero($puntero) {
        $this->puntero = $puntero;
    }
    
    public function abrirFichero() {
        $this->setPuntero(fopen($this->nombre, $this->modo));
    }
    
    public function cerrarFichero() {
        fclose($this->getPuntero());
    }
    
    public function escribirCadena($cadena) {
        return fwrite($this->puntero, $cadena);
    }
    
    public function escribir($cadena) {
        file_put_contents($this->nombre, $cadena);
    }
    
    public function escribirLinea($cadena) {
        fwrite($this->puntero, $cadena . "\n");
    }
    
    public function leer($longitud=0) {
        if ($longitud == 0) {
            $longitud = filesize($this->nombre);
        }
        
        $this->setContenido(fread($this->puntero, $longitud));
    }
    
    public function leerLinea() {
        $this->setLinea(fgets($this->puntero));
    }
    
    public function leerFicheroArray() {
        $salida = [];
        
        while ($c = fgetc($this->puntero)) {
            $salida[] = $c;
        }
        
        $this->setContenidoFichero($salida);
    }
    
    function leerFicheroString() {
        $this->setContenidoFichero(fgets($this->puntero, filesize($this->nombre)));
    }
    
    function moverPuntoDeterminado($punto) {
        if ($punto == 0) {
            rewind($this->puntero);
        } else {
            fseek($this->puntero, $punto);
        }
    }
    
    public function getLinea() {
        return $this->linea;
    }

    public function getContenidoFichero() {
        return $this->contenidoFichero;
    }

    public function getContenido() {
        return $this->contenido;
    }

    private function setLinea($linea) {
        $this->linea = $linea;
        return $this;
    }

    private function setContenidoFichero($contenidoFichero) {
        $this->contenidoFichero = $contenidoFichero;
        return $this;
    }

    private function setContenido($contenido) {
        $this->contenido = $contenido;
        return $this;
    }

}
