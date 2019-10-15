<?php
    $numero1 = 0;
    $numero2 = 0;
    $mayor = 0;
    
    $numero1 = $_REQUEST['uno'];
    $numero2 = $_REQUEST['dos'];
  
    if ($numero1 > $numero2) {
        $mayor = $numero1;
    } else {
        $mayor = $numero2;
    }
    
    echo "El número mayor es $mayor";