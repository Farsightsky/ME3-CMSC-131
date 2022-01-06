<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php
            function squareTable($limit){
                for($i=1; $i<= $limit; $i++) {
                    echo"$i * $i = " . $i*$i . "    ";
                }
            }
            squareTable(12);
        ?>
    </body>
</html>
