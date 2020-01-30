<div>
    <form name="formulario" action="<?= $this->crearRuta(["accion"=>"ejercicio2"]) ?>" method="get">
        <div>
            <div style="margin-left: 10px;">
                Problema 02
            </div>
            <div>
                <label for="numero1" style="margin-left: 10px;">Numero 1</label>
                <input name="numero1" id="numero1" type="number" required placeholder="Introduce un numero" style="margin-left: 10px; margin-bottom: 10px;" value="<?= $this->numero1 ?>" />
            </div>
            <div>
                <label for="numero2" style="margin-left: 10px;">Numero 2</label>
                <input name="numero2" id="numero2" type="number" required placeholder="Introduce un numero" min="1" style="margin-left: 10px; margin-bottom: 10px;" value="<?= $this->numero2 ?>" />
            </div>
            <div>
                <label for="suma" style="margin-left: 10px;">Suma</label>
                <input name="suma" id="suma" type="number" readonly="1" style="margin-left: 38px; margin-bottom: 10px;" value="<?= $this->suma ?>" />
            </div>
            <div>
                <label for="resta" style="margin-left: 10px;">Resta</label>
                <input name="resta" id="resta" type="number" readonly="1" style="margin-left: 38px; margin-bottom: 10px;" value="<?= $this->resta ?>" />
            </div>
            <div>
                <label for="producto" style="margin-left: 10px;">Producto</label>
                <input name="producto" id="producto" type="number" readonly="1" style="margin-left: 15px; margin-bottom: 10px;" value="<?= $this->producto ?>" />
            </div>
            <div>
                <label for="cociente" style="margin-left: 10px;">Cociente</label>
                <input name="cociente" id="cociente" type="number" readonly="1" style="margin-left: 16px; margin-bottom: 10px;" value="<?= $this->cociente ?>" />
            </div>
            <div>
                <label for="division" style="margin-left: 10px;">Division</label>
                <input name="division" id="division" type="number" readonly="1" style="margin-left: 17px; margin-bottom: 10px;" value="<?= $this->division ?>" />
            </div>
            <div>
                <button name="calcular" style="margin-left: 88px;">Calcular</button>
            </div>
        </div>
    </form>
</div>