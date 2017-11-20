<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
//$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
	$check = filetype($_FILES["fileToUpload"]["tmp_name"]);
	if($check !== false) {
				$uploadOk = 1;
				}
else {
	echo "File not Uploaded. Broken or Correpted type file";
	$uploadOk = 0;
	}
}
// Check if file already exists
if (file_exists($target_file)) {
	echo "file exits";
	$uploadOk=0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
	echo "Sorry, your file is too large.";
	$uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo "<li>Sorry, your file was not uploaded.<li>";
// if everything is ok, try to upload file
} else {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		}else {
			echo "Sorry, there was an error uploading your file.";
			}
}
?> 