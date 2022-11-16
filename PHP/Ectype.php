<!DOCTYPE html>
<html>
<body>

<form id="myForm" action="/action_page_binary.asp" method="post">
  First name: <input type="text" name="fname" value="Donald"><br>
  Last name: <input type="text" name="lname" value="Duck"><br>
  <input type="submit" value="Submit">
</form>

<p>Click the "Try it" button to change the value of the enctype attribute, for how the form data should be encoded.</p>

<p><b>Note:</b> Click "Submit" before and after you have clicked the on "Try it" 
button.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
  document.getElementById("myForm").enctype = "multipart/form-data";
  document.getElementById("demo").innerHTML = "Form data will now be encoded as multipart/form-data.";
}
</script>

</body>
</html>