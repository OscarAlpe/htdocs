<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if (!$_GET){
        ?>
        <form action="1.php">
            <div>Introduce op1 <input name="op1"></div>
            <div>Introduce op2 <input name="op2"></div>
            <div>Introduce x <input name="x"></div>
            <button>Enviar</button>
        </form>

        <?php
            } else {
                $op1=0;
                $op2=0;

                $op1=$_GET['op1'];
                $op2=$_GET['op2'];
                $x=$_GET['x'];

                echo "<div>op1=$op1, op2=$op2, x=$x</div>";
                
                if ($op1>$op2) {
                    $op2=0;
                } else {
                    $op1=0;
                }
                
                while ($op1>$op2) {
                    $op2++;
                }
                
                do {
                    $op1++;
                } while ($op1>$op2);
                
                for ($i=1;$i<=10;$i++) {
                    $r=$i*5;
                    echo "<div>$i->$r</div>";
                }
                
                switch ($x) {
                    case 1:
                        $op1=0;
                        break;
                    case 2:
                        $op2=0;
                        break;
                    case 3:
                        echo "<div>$op1</div>";
                        break;
                    default:
                        echo "<div>$op2</div>";
                        break;
                }
            }
        ?>
    </body>
</html>
