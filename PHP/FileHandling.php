<?php
    $start_time;
    if(isset($_POST['submit'])) {
        $start_time = $_POST["startTime"];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>File Handling</title>
    </head>
    <body>
        <form method="POST" action="FileHandling1.php"><br/>
        Enter a File Name:
            <input type="text" name="fileHandling" value="<?php echo "";?>">
            <a href="FileHandling1.php">
                <input type="button" name="submit" value="Submit">
            </a>
        </form>
    </body>
</html>