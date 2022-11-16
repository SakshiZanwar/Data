<?php
if (isset($_POST["upload"])) {
    // Get Image Dimension
    $filename = $_FILES["file-input"]["name"];
    $fileinfo = @getimagesize($_FILES["file-input"]["tmp_name"]);
    $width = $fileinfo[0];
    $height = $fileinfo[1];
    
    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg"
    );
    
    $db = mysqli_connect("localhost", "root", "", "file1");
    $sql = "INSERT INTO image (filename) VALUES ('$filename')";

    mysqli_query($db, $sql);

    // Get image file extension
    $file_extension = pathinfo($_FILES["file-input"]["name"], PATHINFO_EXTENSION);
    
    // Validate file input to check if is not empty
    if (! file_exists($_FILES["file-input"]["tmp_name"])) {
        $response = array(
            "type" => "error",
            "message" => "Choose image file to upload."
        );
    } else if (! in_array($file_extension, $allowed_image_extension)) { // Validate file input to check if is with valid extension
        $response = array(
            "type" => "error",
            "message" => "Upload valid images. Only PNG and JPEG are allowed."
        );
    } else if (($_FILES["file-input"]["size"] > 2000000)) { // Validate image file size
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds 2MB"
        );
    } else if ($width > "300" || $height > "200") { // Validate image file dimension
        $response = array(
            "type" => "error",
            "message" => "Image dimension should be within 300X200"
        );
    } else {
        $target = "image/" . basename($_FILES["file-input"]["name"]);
        if (move_uploaded_file($_FILES["file-input"]["tmp_name"], $target)) {
            $response = array(
                "type" => "success",
                "message" => "Image uploaded successfully."
            );
        } else {
            $response = array(
                "type" => "error",
                "message" => "Problem in uploading image files."
            );
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Image Upload</title>
    </head>

    <body>
        <h2>PHP Image Upload with Size Type Dimension Validation</h2>
        
        <form id="frm-image-upload" name='img' method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div style="font-size: 25px;">Choose Image file:</div>
                <div style="color: #33004d;">
                    <input type="file" class="file-input" name="file-input">
                </div>
            </div>

            <br />

            <div class="button-row">
                <input type="submit" id="btn-submit" name="upload" value="Upload">
            </div>
        </form>
        
        <?php if(!empty($response)) { ?>

        <div class="response <?php echo $response["type"]; ?> ">
            <?php echo $response["message"]; ?>
        </div>

        <?php } ?>
    </body>
</html>