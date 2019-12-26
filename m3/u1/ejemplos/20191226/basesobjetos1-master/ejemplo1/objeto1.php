<?php

// Vamos a crear una clase denominada Coche
class Coche {
    // Propiedades publicas
    var $color; // mejor no
    public $numero_puertas;
    public $marca;
    public $gasolina;

    // metodos publicos
    function llenarTanque($gasolina_nueva){
        $this->gasolina = $this->gasolina + $gasolina_nueva;
    }

    public function acelerar(){
        $this->gasolina = $this->gasolina - 1;
        return 'Gasolina restante: '.$this->gasolina;
    }
    
}


// Vamos a crear un objeto de tipo coche

$carro = new Coche(); // Instanciamos la clase Carro
$carro->color = 'Rojo'; // Llenamos algunas de las propiedades
$carro->marca = 'Honda';
$carro->numero_puertas = 4;
$carro->llenarTanque(10); // utilizamos los metodos
echo $carro->acelerar();
echo $carro->acelerar();
echo $carro->acelerar();