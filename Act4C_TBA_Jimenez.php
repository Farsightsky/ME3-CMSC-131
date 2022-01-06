<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>

        <?php
            function makeMultiplicationTable($size){
            $cart = array();
            echo "<table>";
            for ($i=1; $i<=$size; $i++){
                $firstcol[$i] = $i;
                echo "<tr>";
                    for ($j=1; $j<=$size; $j++){
                        $firstrow[$j] = $j;
                        if($j==1){
                            echo "<td>$firstcol[$i]</td>"; //first column
                        }
                        else if ($i==1){
                            echo "<td>$firstrow[$j]</td>"; //first row
                        }
                        else{
                            echo "<td>".$firstcol[$i]*$firstrow[$j]."</td>"; //first column value times first row value
                        }
                    }
                echo "</tr>";
            }
            echo "</table>";
            }
            makeMultiplicationTable(7);
        ?>
    </body>
</html>

<style>
    td{
        padding:0 7px 0 7px;
    }
    
</style>