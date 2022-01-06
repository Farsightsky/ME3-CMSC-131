<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php
            $place= array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
            $placeLength = count($place)-1; 
            for($i=0; $i<=$placeLength; $i++){
                if($i==$placeLength){                                       //to stop printing the final erronous comma
                    echo $place[$i]."<br>";
                }
                else{
                    echo $place[$i].", ";
                }
            }   
            echo "<br>";
            sort($place);
            echo "<ul>";
            foreach($place as $temp){
                echo "<li>".$temp."</li>";
            }
            echo "<br>";
            echo "</ul>";
            array_push($place,"Los Angeles", "Calcutta", "Osaka", "Manila"); //adding the cities
            sort($place);
            echo "<ul>";
            foreach($place as $temp){
                echo "<li>".$temp."</li>";
            }
            echo "</ul>";

        ?>
    </body>
</html>
