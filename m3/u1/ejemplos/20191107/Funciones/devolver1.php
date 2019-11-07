<?php
    function operaciones($num1, $num2) {
        $resultado = [
            'suma' => $num1 + $num2,
            'resta' => $num1 - $num2,
            'multiplicacion' => $num1 * $num2,
            'division' => $num1 / $num2,
        ];
        
        return $resultado;
    }
    
    $resultado_operaciones = operaciones(10, 3);
    
    foreach ($resultado_operaciones as $operacion => $resultado) {
        echo "<div>$operacion: $resultado</div>";
    }