<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php
            $month = date("m");
            if($month==12) {
                echo "It's December, so it's really cold.";
            }
            else if ($month < 12 && $month > 0) {
                echo "Not December, so at least not in the peak of the chilly weather.";
            }
            else {
                echo "Hey, the calendar's broken. Debug the code please";
            }
        ?>
    </body>
</html>
