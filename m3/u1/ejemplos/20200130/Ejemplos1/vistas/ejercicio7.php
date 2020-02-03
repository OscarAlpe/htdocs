<div>
    <form name="formulario" action="<?= $this->crearRuta(["accion"=>"ejercicio7"]) ?>" method="get">
        <div>
            <div style="margin-left: 10px;">
                Ejercicio 7
            </div>
            <div>
                <label for="numeroCirculos" style="margin-left: 10px;">Numero de circulos a dibujar</label>
                <input name="numeroCirculos" id="numeroCirculos" type="number" required placeholder="Introduce el número de circulos" style="margin-left: 10px; margin-bottom: 10px;" min="1" />
            </div>
            <div>
                <button name="dibujar" style="margin-left: 10px;">Dibujar</button>
            </div>
        </div>
    </form>
</div>