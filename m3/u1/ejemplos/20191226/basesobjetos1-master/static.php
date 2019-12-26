<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         class Matematicas{
             public $numero;
          public function coseno(){
              cos($this->numero);
          }
          function __construct($numero) {
              $this->setNumero($numero);
          }
          public function getNumero() {
              return $this->numero;
          }

          public function setNumero($numero) {
              $this->numero = $numero;
          }



          
         }
         
         //Matematicas::coseno(35);
         $a=new Matematicas(40);
         $a->coseno();
         $a->setNumero(35);
         
        ?>
    </body>
</html>
