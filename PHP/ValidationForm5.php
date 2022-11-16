<!DOCTYPE html>
<html>
	<head>
		<title>Validation Form 5</title>
	</head>
	<body>
		<?php
			$nameErr = '';
			$emailErr = '';
			$companyNameErr = '';
			$companyEmailErr = '';
			$contactErr = '';
			$addressErr = '';
			$messageErr = '';

			if(isset($_POST["submit"])) {
                $name = $_POST["name"];
                if (!preg_match ("/^[a-zA-Z ]*$/", $name)){
                    $nameErr = "Only alphabets are allowed.";
                } else {
                    $length = strlen ($name);
                    if ( $length < 3) {
                        $nameErr = "Name is too short.";
                    } elseif ($length >= 20) {
                        $nameErr = "Name is too long.";
                    } else {
                        $name = $_POST['name'];
                    }
                }

                $email = $_POST["email"];
                if (!preg_match ("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)) { 
                    $emailErr = "Invalid Email.";
                } else {
                    $email = $_POST['email'];
                }

                $companyName = $_POST["companyName"];
                if (!preg_match ("/^[a-zA-Z ]*$/", $companyName)){
                    $companyNameErr = "Only alphabets are allowed.";
                } else {
                    $length = strlen ($companyName);
                    if ( $length < 3) {
                        $companyNameErr = "Company Name is too short.";
                    } elseif ($length >= 20) {
                        $companyNameErr = "Company Name is too long.";
                    } else {
                        $companyName = $_POST['companyName'];
                    }
                }

                $companyEmail = $_POST["companyEmail"];
                if (!preg_match ("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $companyEmail)) { 
                    $companyEmailErr = "Invalid Company Email.";
                } else {
                    $companyEmail = $_POST['companyEmail'];
                }

                $contact = $_POST["contact"];
                if (!preg_match("/^[0-9\_]*$/", $contact)) {
                	$contactErr = "Only numbers allowed.";
                } else {
                	$length1 = strlen($contact);
                	if ( $length1 < 8) {
                		$contactErr = "Contact number is not less than 8.";
                	} elseif ($length1 > 20) {
                		$contactErr = "Contact number is not greater than 20.";
                	} else {
                		$contact = $_POST['contact'];
                	}
                }

                $address = $_POST["address"];
                if (empty($_POST["address"])) {
                    $addressErr = "Address is invalid.";
                } else {
                    $address = $_POST['address'];
                }

                $message = $_POST['message'];
                if (empty($_POST['message'])) {
                	$messageErr = "Message is invalid.";
                } else {
                	$message = $_POST['message'];
                }
            }
		?>

		<h3>Validation Form 5</h3>
		<form method="POST">
            Name* : <input type="text" name="name" >
            <span><?php echo $nameErr;?></span>
            <br><br>

            Email* : <input type="email" name="email" >
            <span><?php echo $emailErr;?></span>
            <br><br>

            Company Name* : <input type="text" name="companyName" >
            <span><?php echo $companyNameErr;?></span>
            <br><br>

            Company Email* : <input type="email" name="companyEmail" >
            <span><?php echo $companyEmailErr;?></span>
            <br><br>

            Contact* : <input type="text" name="contact" >
            <span><?php echo $contactErr;?></span>
            <br><br>

            Address : <br><textarea name="address" rows="5" cols="40"></textarea>
            <span><?php echo $addressErr;?></span>
            <br><br>

            Message : <br><textarea name="message" rows="5" cols="40"></textarea>
            <span><?php echo $messageErr;?></span>
            <br><br>

            <input type="submit" name="submit" value="Submit">
        </form>
	</body>
</html>