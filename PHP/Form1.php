<!DOCTYPE html>
<html>
    <head>
        <title>Form 1</title>
    </head>
    <body>
        <?php if(isset($_POST['submit'])): ?>
        <h3>Thank You <?php echo $_POST['name']; ?> for filling this form!!</h3>
        
        <p>Go <a href="Form1.php">back</a> to the form.</p>

        <?php else: ?>

        <h3>Fill Your Details</h3>
        <form method="POST">
            <label>Name : </label>
            <input type="text" name="name" /> <br/><br/>
            <label>Date of Birth : </label>
            <input type="date" name="dob" /> <br/><br/>
            <label>Education : </label>
            <input type="text" name="education" /> <br/><br/>
            <label>Year of Passing : </label>
            <input type="date" name="yop" /> <br/><br/>
            <label>Percentage : </label>
            <input type="percent" name="percentage" /> <br/><br/>
            <label>College Name : </label>
            <input type="text" name="clgname" /> <br/><br/>
            <input type="submit" name="submit" value="Submit" />
        </form>
        <?php endif; ?>
    </body>
</html>