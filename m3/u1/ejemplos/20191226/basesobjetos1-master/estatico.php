<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class Cosa {
            
            public static function getFondo() {
                return self::$fondo;
            }

            public static function setFondo($fondo) {
                self::$fondo = $fondo;
            }

            
            public $color = "azul";
            var $tipo;
            private $peso = 10;
            protected $altura;
            public static $fondo=10;

            function __construct($color, $tipo, $peso, $altura) {
                $this->color = $color;
                $this->tipo = $tipo;
                $this->setPeso($peso);
                $this->altura = $altura;
            }

            public function setTodo() {
                $this->peso = 0;
                $this->color = "verde";
            }

            public function getPeso() {
                return $this->peso;
            }

            public function getAltura() {
                return $this->altura;
            }

            public function setPeso($peso) {
                $this->peso = $peso+2;
            }
            
            public static function imprimir(){
                echo "Empezamos";
            }

            public function setAltura($altura) {
                $this->altura = $altura;
            }

        }


        Cosa::imprimir();
        echo Cosa::$fondo;
        echo Cosa::getFondo();
        
        ?>
    </body>
</html>
