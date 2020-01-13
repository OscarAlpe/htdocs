<svg width="1080" height="450">
  <rect x="0" y="0" width="1080" height="450" style="fill:gray;" />
<?php
 $h = new clases\RenderizaTexto($this->cH, "+");
 echo $h->renderiza();
?>
<?php
 $h = new clases\RenderizaTexto($this->cR, "Y");
 echo $h->renderiza();
?>
<?php
 $h = new clases\RenderizaTexto($this->cA, "P");
 echo $h->renderiza();
?>
</svg>
<form action="<?= $this->crearRuta(["accion"=>"ver_mapa"]) ?>" method="get">
Mostrar capa de Hospitales y Residencias<input type="checkbox" name="chkHospitales" <?= $this->chkH ?>/>
Mostrar capa de Restaurantes y Bares<input type="checkbox" name="chkRestaurantes" <?= $this->chkR ?> />
Mostrar capa de Paradas de Autobuses<input type="checkbox" name="chkAutobuses" <?= $this->chkA ?> />
<button value="enviar" type="submit" name="btnEnviar">Enviar</button>
</form>

<script>
let a=document.querySelectorAll("input");
   a.forEach((check)=>{
        check.addEventListener("change",()=>{
        document.querySelector("button").click();
     });
   }); 
</script>    