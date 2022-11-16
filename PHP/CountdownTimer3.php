<?php
include_once("CountdownTimer1.php");
include_once("CountdownTimer2.php");
$start_time = $_POST['startTime'];
$end_time = $_POST['endTime'];
$diff = ($end_time - $start_time);
echo "Difference : ".$diff;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CountDown Timer</title>
    </head>
    <body>
        <form method="POST">
            
        </form>
    </body>
</html>