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
           Escriba la palabra en cada caja de texto y le diré si ha repetido alguna
       </div>
    
        <form name="formulario" action="<?= $this->crearRuta(["accion"=>"paso3"]) ?>" method="get">
            <fieldset style="border: solid; border-color: gray;">
                <legend style="border: solid; border-color: gray; background-color: white; margin-left: 20px;">Ejercicio 1-Paso 2</legend>
                <div>
                    <?= $this->dibuja ?>
                    <div style="float: right; margin-bottom: 10px; margin-right: 10;">
                        <button name="comprobar" value="1">Comprobar</button>
                        <button name="restablecer" type="reset">Restablecer</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
