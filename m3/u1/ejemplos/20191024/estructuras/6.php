<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $enlaces=[
                [
                    'url'=>'1.php',
                    'clase'=>'caja1',
                    'etiqueta'=>'Ejercicio 1',
                ],
                [
                    'url'=>'2.php',
                    'etiqueta'=>'Ejercicio 2',
                ],
                [
                    'url'=>'3.php',
                    'clase'=>'caja3',
                    'etiqueta'=>'Ejercicio 3',
                ],
                [
                    'url'=>'4.php',
                    'etiqueta'=>'Ejercicio 4',
                ],
                [
                    'url'=>'5.php',
                    'clase'=>'caja5',
                    'etiqueta'=>'Ejercicio 5',
                ],
                [
                    'url'=>'6.php',
                    'etiqueta'=>'Ejercicio 6',
                ]
            ];
            
            echo '<div>';
            echo '<ul>';
            foreach ($enlaces as $enlace) {
                echo '<li';
                if (isset($enlace["clase"])) {
                    echo ' class="' . $enlace["clase"] . '"';
                }
                echo '><a href="'. $enlace["url"] . '">' . $enlace["etiqueta"] . '</a></li>';
            }
            echo '</ul>';
            echo '</div>';
        ?>
        
        Vista/Controlador
        
        <ul>
            <?php
                foreach ($enlaces as $enlace) {
                    $clase="";
                    if (isset($enlace["clase"])) {
                        $clase='class="' . $enlace["clase"] . '"';
                    }
            ?>
            <li <?= $clase ?>>
                <a href="<?= $enlace["url"] ?>">
                    <?= $enlace["etiqueta"] ?>
                </a>
            </li>
            <?php
                }
            ?>
        </ul>
    </body>
</html>
