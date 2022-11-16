<?php
    $start_time;
    if(isset($_POST['submit'])) {
        $start_time = $_POST["startTime"];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CountDown Timer</title>
    </head>
    <body>
        <form method="POST" action="CountdownTimer3.php">
            <input type="text" name="startTime" value="<?php $start_time = time(); echo $start_time;?>">
            <a href="CountdownTimer2.php">
                <input type="button" name="submit" value="Submit">
            </a>
        </form>
    </body>
</html>