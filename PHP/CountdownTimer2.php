<?php
    // session_start();
    // $_SESSION['startTime'] = $_POST['startTime'];
    if(isset($_POST['submit'])) {
        $end_time = $_POST["endTime"];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CountDown Timer</title>
    </head>
    <body>
        <form method="POST" action="CountdownTimer3.php">
            <input type="text" name="endTime" value="<?php $end_time = time(); echo $end_time;?>">
            <a href="CountdownTimer3.php">
                <input type="button" name="submit" value="Submit">
            </a>
        </form>
    </body>
</html>