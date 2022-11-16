<!DOCTYPE html>
<html>
    <head>
        <title>Validation Form 3</title>
    </head>
    <body>
        <?php
            $ErrMsg='';
            $emailErr = '';
            $genderErr = '';
            $websiteErr = '';

            if(isset($_POST["submit"])) {
                $name = $_POST["name"];
                if (!preg_match ("/^[a-zA-Z]*$/", $name)){
                    $ErrMsg = "Only alphabets are allowed.";
                } else {
                    $length = strlen ($name);
                    if ( $length < 3) {
                        $ErrMsg = "Name is too short.";
                    } elseif ($length >= 20) {
                        $ErrMsg = "Name is too long.";
                    } else {
                        echo "Name : $name";
                    }
                }

                $email = $_POST["email"];
                if (!preg_match ("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)) { 
                    $emailErr = "Invalid Email";
                } else {
                    echo "<br>Email : $email";
                }

                $gender = $_POST["gender"];
                if (empty($_POST["gender"])) {
                    $genderErr = "<br> *Gender is required";
                } else {
                    echo "<br>Gender : $gender";
                }

                $website = $_POST["website"];
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                    $websiteErr = "URL is not valid";
                } else {
                    echo "<br/>Website URL : $website";
                }
            }
        ?>

        <h3>Validation Form 3</h3>
        <form method="POST">
            Name* : <input type="name" name="name" >
            <span><?php echo $ErrMsg;?></span>
            <br><br>

            Email* : <input type="email" name="email" >
            <span><?php echo $emailErr;?></span>
            <br><br>

            Gender* :<br />
            <input type="radio" name="gender" value="female">Female<br />
            <input type="radio" name="gender" value="male">Male<br />
            <input type="radio" name="gender" value="other">Other
            <span><?php echo $genderErr;?></span>
            <br /><br />
            
            Website:
            <input type="text" name="website">
            <span><?php echo $websiteErr; ?></span>
            <br><br>

            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>