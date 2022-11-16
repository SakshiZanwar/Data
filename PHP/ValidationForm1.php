<!DOCTYPE html>
<html>
    <head>
	   <title>Validation Form 1</title>
    </head>
    <body>
        <?php
            $error_firstname = '';
            $error_lastname = '';
            $error_contact = '';

            if (isset($_POST['submit'])) {
                // Check for a proper First name
                if (!empty($_POST['firstname'])) {
                    $firstname = $_POST['firstname'];
                    $pattern = "/^[a-zA-Z0-9\_]{2,20}$/";// This is a regular expression that checks if the name is valid characters
                    if (preg_match($pattern,$firstname)) {
                        $firstname = $_POST['firstname'];
                    } else{
                        $error_firstname = 'Your first name is too short or enter a valid first name.<br>';
                    }
                } else {
                    $error_firstname = 'You forgot to enter your First Name.<br>';
                }

                // Check for a proper Last name
                if (!empty($_POST['lastname'])) {
                    $lastname = $_POST['lastname'];
                    $pattern = "/^[a-zA-Z ]{2,20}/";// This is a regular expression that checks if the name is valid characters
                    if (preg_match($pattern,$lastname)){
                        $lastname = $_POST['lastname'];
                    } else {
                        $error_lastname = 'Your last name is too short or enter a valid last name.<br>';
                    }
                } else {
                    $error_lastname = 'You forgot to enter your Last Name.<br>';
                }

                //Check for a valid phone number
                if (!empty($_POST['phone'])) {
                    $phone = $_POST['phone'];
                    $pattern = "/^[6789]{1}[0-9]{7,15}$/";
                    if (preg_match($pattern,$phone)){
                        $phone = $_POST['phone'];
                    } else{
                        $error_contact = 'Your phone number is too short or it only be numbers.<br>';
                    }
                } else {
                    $error_contact = 'You forgot to enter your Phone number.<br>';
                }
            }
        ?>

        <h3>Validation Form 1</h3>
        <form method="POST" action="">
            <label>First Name :</label>
            <input type="text" name="firstname" placeholder="First Name*" >
            <span><?php echo ($error_firstname != "")? $error_firstname : '';?></span><br><br>

            <label>Last Name :</label>
            <input type="text" name="lastname" placeholder="Last Name*" >
            <span><?php echo ($error_lastname != "")? $error_lastname : '';?></span><br><br>
            
            <label>Phone :</label>
            <input type="text" name="phone" placeholder="Contact*" >
            <span><?php echo ($error_contact != "")? $error_contact : '';?></span><br><br>
            
            <button type="submit" name="submit">Submit</button>
        </form>
    </body>
</html>