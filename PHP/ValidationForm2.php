<!DOCTYPE html>
<html>
    <head>
        <title>Validation Form 2</title>
    </head>
    <body>
        <?php
            $error_name = '';
            $error_email = '';
            $error_contact = '';

            if (isset($_POST['submit'])) {
            // Check for a proper Name
                if (!empty($_POST['name'])) {
                    $name = $_POST['name'];
                    $pattern = "/^[a-zA-Z0-9\_]{2,20}$/";// This is a regular expression that checks if the name is valid characters
                    if (preg_match($pattern,$name)) {
                        $name = $_POST['name'];
                    } else{
                        $error_name = 'Invalid Name.';
                    }
                } else {
                    $error_name = 'You forgot to enter your Name.';
                }

                if (!empty($_POST['email'])) {
                    $email = $_POST['email'];
                    //$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
                    if (preg_match ("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)) {
                        $email = $_POST['email'];
                    } else {
                        $error_email = "Invalid Email.";
                    }
                } else {
                    $error_email = "You forgot to enter your Email";
                }

                //Check for a valid phone number
                if (!empty($_POST['phone'])) {
                    $phone = $_POST['phone'];
                    $pattern = "/^[0-9\_]{7,20}/";
                    if (preg_match($pattern,$phone)){
                        $phone = $_POST['phone'];
                    } else{
                        $error_contact = 'Invalid Contact Number.';
                    }
                } else {
                    $error_contact = 'You forgot to enter your Contact number.';
                }
            }
        ?>

        <h3>Validation Form 2</h3>
        <form method="POST">
            <label>Name* :</label>
            <input type="text" name="name">
            <span><?php echo ($error_name != "")? $error_name : '';?></span><br><br>

            <label>Email* :</label>
            <input type="text" name="email">
            <span><?php echo ($error_email != "")? $error_email : '';?></span><br><br>

            <label>Contact* :</label>
            <input type="text" name="phone">
            <span><?php echo ($error_contact != "")? $error_contact : '';?></span><br><br>
            
            <button type="submit" name="submit">Submit</button>
        </form>
    </body>
</html>