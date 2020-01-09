<form action="<?= $this->crearRuta(["accion"=>"hospitales"]) ?>" method="get">
    <div>
        <label for="inputHospitales">Coordenadas de Hospitales y residencias</label>
        <input id="inputHospitales" name="coordenadasHospitales" type="text">
    </div>
    <div>
        <button name="aceptar">Aceptar</button>
    </div>
</form>