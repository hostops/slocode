<?php
// upload the image in appropriate directory
// note that the request parameter name of image being uploaded is "imageName"
$uuid = uniqid();
move_uploaded_file($_FILES["imageName"]["tmp_name"], "../../../Uploads/$uuid" . $_FILES["imageName"]["name"]);

// return the complete path (absolute/relative) of uploaded image in response
echo "<div id=\"image\">/Uploads/$uuid" . $_FILES["imageName"]["name"] . "</div>";
?>
