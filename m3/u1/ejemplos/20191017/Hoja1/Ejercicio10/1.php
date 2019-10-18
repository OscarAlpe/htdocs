<?php
    $radio = 0;
    $longitud_circunferencia = 0;
    $area = 0;
    $volumen = 0;
    
    $radio = $_GET["radio"];
    
    $longitud_circunferencia = 2 * $radio * pi();
    $area = pow($radio, 2) * pi();
    $volumen = 4/3 * pow($radio, 3) * pi();
    
    echo "<div>Longitud circunferencia:$longitud_circunferencia</div>";
    echo "<div>Area:$area</div>";
    echo "<div>Volumen:$volumen</div>";