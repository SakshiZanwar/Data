<?php
error_reporting(0);

//$msg = "";
$errors= array();
// If upload button is clicked ...
if (isset($_POST['upload'])) {
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$filesize = $_FILES["uploadfile"]["size"];
	$folder = "./image/" . $filename;

	$db = mysqli_connect("localhost", "root", "", "fileswithdatabase");

	// Get all the submitted data from the form
	$sql = "INSERT INTO image (filename) VALUES ('$filename')";

	// Execute query
	mysqli_query($db, $sql);

	if($filesize > (2097152)) {
		$messages[]="Upload file size more then 2MB";
	}

	if(!empty($messages)) { 
        echo '<ul>';
        foreach($messages as $err)
        {
            echo '<li>'.$err.'</li>';
        }
        echo '</ul>';
    } else { 
        if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $filename)) {
            echo "The ". $_FILES["uploadfile"]["name"]. " has successfully uploaded.";
        } else {
            echo "Sorry, Something we are wrong!";
        }
    }

	// Now let's move the uploaded image into the folder: image
	// if (move_uploaded_file($tempname, $folder)) {
	// 	echo "<h3> Image uploaded successfully!</h3>";
	// } else {
	// 	echo "<h3> Failed to upload image!</h3>";
	// }
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Image Upload</title>
	</head>
	<body>
		<div>
			<form method="POST" action="" enctype="multipart/form-data">
				<br />
				<div>
					<input class="form-control" type="file" name="uploadfile" value="" />
				</div>
				<br />
				<div>
					<button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
				</div>
			</form>
		</div>
		<div>
			<?php
				$query = " select * from image ";
				$result = mysqli_query($db, $query);

				while ($data = mysqli_fetch_assoc($result)) {
			?>
			
			<img src="./image/<?php echo $data['filename']; ?>">

			<?php
				}
			?>
		</div>
	</body>
</html>