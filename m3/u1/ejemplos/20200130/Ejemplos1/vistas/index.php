<div>
    <form name="formulario" action="<?= $this->crearRuta(["accion"=>"index"]) ?>" method="get">
        <div>
            <div style="margin-left: 10px;">
                Problema 01
            </div>
            <div>
                <label for="numero1" style="margin-left: 10px;">Numero 1</label>
                <input name="numero1" id="numero1" type="number" required placeholder="Introduce un numero" style="margin-left: 10px; margin-bottom: 10px;" value="<?= $this->numero1 ?>" />
            </div>
            <div>
                <label for="numero2" style="margin-left: 10px;">Numero 2</label>
                <input name="numero2" id="numero2" type="number" required placeholder="Introduce un numero" style="margin-left: 10px; margin-bottom: 10px;" value="<?= $this->numero2 ?>" />
            </div>
            <div>
                <label for="suma" style="margin-left: 10px;">Suma</label>
                <input name="suma" id="suma" type="number" readonly="1" style="margin-left: 38px; margin-bottom: 10px;" value="<?= $this->suma ?>" />
            </div>
            <div>
                <button name="calcular" style="margin-left: 88px;">Calcular</button>
            </div>
        </div>
    </form>
</div>