<!DOCTYPE html>
<html>
<body>
<?php
$websiteErr = "";
$emailErr = "";
$passwordErr = "";
$portErr = "";
$hostErr = "";

if(isset($_POST['submit'])){
    
    $website_name = ( !empty( $_POST['website_name'] )) ? $_POST['website_name'] : '';
    $email = ( !empty( $_POST['email'] )) ? $_POST['email'] : '';
    $password = ( !empty( $_POST['password'] )) ? $_POST['password'] : '';
    $port = ( !empty( $_POST['port'] )) ? $_POST['port'] : '';
    $host_name = ( !empty( $_POST['host_name'] )) ? $_POST['host_name'] : '';

    if(empty($website_name)) {
        $websiteErr = "It should not be blank.";
    } else {
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website_name)) {
    		$websiteErr = "Website name is invalid";
    	}
    }

    if (empty($email)) {
    	$emailErr = "It should not be blank.";
    } else {
    	if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)) {
    		$emailErr = "Email is invalid";
    	}
    }

    if (empty($password)) {
    	$passwordErr = "It should not be blank.";
    } else {
    	if (!preg_match("/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/", $password)) {
    		$passwordErr = "Password is invalid";
    	}
    }

    if (empty($port)) {
    	$portErr = "It should not be blank.";
    } else {
    	if (!preg_match("/^[0-9]+$/", $port)) {
    		$port = $_POST['port'];
    	} else {
    		$portErr = "Port is invalid";
    	}
    }

    if (empty($host_name)) {
    	$hostErr = "It should not be blank.";
    } else {
    	if (!preg_match("/^([a-zA-Z]\\.)+[a-zA-Z]$/", $host_name)) {
    		$hostErr = "Host name is invalid";
    	}
    }
}
?>
<section>
<div>
<form action="" method="post">
<div>
<label for="website_name">Website Name*</label>
<div>
<input type="text" name="website_name">
<span><?php echo ($websiteErr != "")? $websiteErr : '';?></span><br><br>
</div>
</div>
<div>
<label for="email_id">Email*</label>
<div>
<input type="text" name="email">
<span><?php echo ($emailErr != "")? $emailErr : '';?></span><br><br>
</div>
</div>
<div>
<label for="smtp_pass">Password*</label>
<div>
<input type="password" name="password">
<span><?php echo ($passwordErr != "")? $passwordErr : '';?></span><br><br>
</div>
</div>
<div>
<label for="port_number">Port*</label>
<div>
<input type="text" name="port">
<span><?php echo ($portErr != "")? $portErr : '';?></span><br><br>
</div>
</div>
<div>
<label for="host_name">Host Name*</label>
<div>
<input type="text" name="host_name">
<span><?php echo ($hostErr != "")? $hostErr : '';?></span><br><br>
</div>
</div>
<div>
<button type="submit" name="submit">SUBMIT</button>
</div>
</form>
</body>
</html>