<?php

/**
 * Description of Cliente
 *
 * @author ramon
 */
class Cliente extends Persona{
    private $telefonoContacto;
    public function mostrar() {
        echo "Soy un cliente y mi telefono es $this->telefonoContacto";
    }
}
