<?php
    $numero1 = 0;
    $numero2 = 0;
    
    $numero1 = $_REQUEST['uno'];
    $numero2 = $_REQUEST['dos'];

    if ($numero1 > $numero2)
        echo $numero1;
    else
        echo $numero2;