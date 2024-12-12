<?php
print_r($_FILES);
// echo "<br />";
// echo basename($_FILES["fileToUpload"]["name"]);
$targetDirectory = "uploads/";
$targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
$uploadSuccess = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile); //success true fail false
if ($uploadSuccess) { 
	echo "File uploaded successfully.";
} else { 
	echo "File upload failed.";
}
?>