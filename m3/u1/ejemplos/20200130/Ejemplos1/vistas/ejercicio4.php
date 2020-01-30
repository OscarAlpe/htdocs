<div>
    <div>
        <?= $this->salida ?>
   </div>
    <form name="formulario" action="<?= $this->crearRuta(["accion"=>"ejercicio4"]) ?>" method="get">
        <div>
            <button name="tirada">Tirar dado</button>
        </div>
    </form>
</div>