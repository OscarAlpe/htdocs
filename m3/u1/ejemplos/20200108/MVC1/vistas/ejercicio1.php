<form action="<?= $this->crearRuta(["accion"=>"ejercicio1"]) ?>" method="get">
<div>
    <label for="inputNumero1">Numero 1</label>
    <input id="inputNumero1" type="number" name="numero[]">
</div>
<div>
    <label for="inputNumero2">Numero 2</label>
    <input id="inputNumero2" type="number" name="numero[]">
</div>
<div>
    <label for="inputNumero3">Numero 3</label>
    <input id="inputNumero3" type="number" name="numero[]">
</div>
<div>
    <button name="aceptar">Aceptar</button>
</div>
</form>