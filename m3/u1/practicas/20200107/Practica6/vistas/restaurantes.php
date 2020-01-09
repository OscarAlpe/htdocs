<form action="<?= $this->crearRuta(["accion"=>"restaurantes"]) ?>" method="get">
    <div>
        <label for="inputRestaurantes">Coordenadas de Restaurantes y Bares</label>
        <input id="inputRestaurantes" name="coordenadasRestaurantes" type="text">
    </div>
    <div>
        <button name="aceptar">Aceptar</button>
    </div>
</form>