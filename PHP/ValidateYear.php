<!DOCTYPE html>
<html>
    <head>
        <title>Validate Year</title>
    </head>
    <body>
        <?php
            $ErrMsg='';
            if(isset($_POST["submit"])) {
                $year = $_POST["year"];
                if (!preg_match ("/^[0-9]*$/", $year) ){
                    $ErrMsg = "Only numeric value is allowed.";
                    //echo $ErrMsg;
                } else {
                    $length = strlen ($year);
                    
                    if ( $length > 4 || $length <=3 ) {
                        $ErrMsg = "Year has 4 digits only.";
                        //echo $ErrMsg;
                    } else{
                        $ErrMsg = "<br/> The year is $year.";
                    }
                }
            }
        ?>
        <h5>PHP Form Validation</h5>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Year: <input type="year" name="year" >
            <span><?php echo $ErrMsg;?></span>
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>