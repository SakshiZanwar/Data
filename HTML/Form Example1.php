<!-- Form Example 1-->
<!DOCTYPE html>
<html>
    <head>
        <title>Form Example 1</title>
    </head>
    <body>
        <h2>Support Request</h2>
        <p>This form is a simple form.</p>
        <form action="test.php" method="POST">
            <label for="fname"><strong> First Name *</strong><br></label>
            <input type="text" id="fname" name="fname" size="30" required />
            <br>
            <label for="lname"><strong> Last Name *</strong><br></label>
            <input type="text" id="lname" name="lname" size="30" required />
            <br>
            <label for="email"><strong> Email *</strong><br></label>
            <input type="email" id="email" name="email" size="30" required />
            <br>
            <label for="website"><strong> Website *</strong><br></label>
            <input type="url" id="website" name="website" size="30" required />
            <br>
            <strong>Please describe your request</strong><br>
            <textarea rows="7" cols="70"></textarea>
            <br>
            <strong>File</strong>
            <br>
            <input type="file" id="website" name="website" size="30" required />
            <br>
            <br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>