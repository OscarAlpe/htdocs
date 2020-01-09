<form action="<?= $this->crearRuta(["accion"=>"autobuses"]) ?>" method="get">
    <div>
        <label for="inputAutobuses">Coordenadas de paradas de Autobuses</label>
        <input id="inputAutobuses" name="coordenadasAutobuses" type="text">
    </div>
    <div>
        <button name="aceptar">Aceptar</button>
    </div>
</form>