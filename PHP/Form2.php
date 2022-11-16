<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
        <?php if (isset($_POST['form_submitted'])): ?>
        <h3>Thank You <?php echo $_POST['firstname']; ?> for registering in this camp!!</h3>

        <p>You have been registered as
            <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?> for blood donation camp.
        </p>

        <p>Go <a href="Form2.php">back</a> to the form.</p>

        <?php else:
        ?>

        <h2>Registration Form for Blood Donation Camp</h2>
        <form method="POST">
            First Name:
            <input type="text" name="firstname">
            <br/><br/>
            Last Name:
            <input type="text" name="lastname">
            <br/><br/>
            Mobile Number:
            <input type="text" name="mobileno">
            <br/><br/>
            Blood Group:
            <input type="text" name="bloodGrp">
            <br/><br/>
            <input type="hidden" name="form_submitted" value="1" />
            <input type="submit" value="Submit">

            <div>
                <h4>Hobbies</h4>
                <span class="wpcf7-form-control-wrap hobbies">
                    <span class="wpcf7-form-control wpcf7-checkbox">
                    <span class="wpcf7-list-item first">
                        <label>
                        <input type="checkbox" name="hobbies[]" value="">
                        <span class="wpcf7-list-item-label">Reading</span>
                        </label>
                    </span>
                    <span class="wpcf7-list-item">
                        <label>
                        <input type="checkbox" name="hobbies[]" value="">
                        <span class="wpcf7-list-item-label">Fishing</span>
                        </label>
                    </span>
                    <span class="wpcf7-list-item">
                        <label>
                        <input type="checkbox" name="hobbies[]" value="">
                        <span class="wpcf7-list-item-label">Traveling</span>
                        </label>
                    </span>
                    <span class="wpcf7-list-item">
                        <label>
                        <input type="checkbox" name="hobbies[]" value="">
                        <span class="wpcf7-list-item-label">Music</span>
                        </label>
                    </span>
                    <span class="wpcf7-list-item last">
                        <label>
                        <input type="checkbox" name="hobbies[]" value="">
                        <span class="wpcf7-list-item-label">Watching Sports</span>
                        </label>
                    </span>
                    </span>
                </span>
            </div>
        </form>
        <?php endif; ?>
    </body>
</html>