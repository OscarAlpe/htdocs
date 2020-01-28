<div>
    <div style="text-align: center; font-weight: bold;">
        EJERCICIO NUMERO 1 DEL EXAMEN DE PHP
    </div>
    <br />
    <br />
    <br />
    <br />
    <div style="width: 90%; margin: 0 auto; display: block;">
        <div style="height: 40px;">
           Escriba un número (0 < número ≤ 10) y dibujaré una tabla de una columna de ese tamaño con cajas de texto en cada celda.
        </div>
        <form name="formulario" action="<?= $this->crearRuta(["accion"=>"paso2"]) ?>" method="get">
            <fieldset style="border: solid; border-color: gray; height: 15%;">
                <legend style="border: solid; border-color: gray; background-color: white; margin-left: 20px;">Ejercicio 1</legend>
                <div>
                    <label for="ttabla" style="margin-left: 10px;">Tamaño de la tabla</label>
                    <input name="ttabla" id="ttabla" type="number" required placeholder="Introduce un numero" min="1" max="10" style="margin-top: 20px;"/>
                    <div style="float: right; margin-right: 10px; margin-top: 35px;">
                        <button name="dibujar" value="1">Dibujar</button>
                        <button name="restablecer" type="reset">Restablecer</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>