<?php
// Define the target directory to store the uploaded files
$targetDirectory = "upload/";

// Ensure the uploads directory exists, create it if not
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Get the file details from the $_FILES superglobal
$targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
$uploadSuccess = true;
$fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Define the maximum file size (10MB)
$maxFileSize = 10 * 1024 * 1024; // 10MB

// Define allowed file types
$allowedFileTypes = array("jpg", "png", "gif");

// Check for upload errors
if ($_FILES["fileToUpload"]["error"] !== UPLOAD_ERR_OK) {
    echo "File upload error: " . $_FILES["fileToUpload"]["error"];
    $uploadSuccess = false;
}

// Check the file size
if ($_FILES["fileToUpload"]["size"] > $maxFileSize) {
    echo "File size exceeds the limit of 10MB.";
    $uploadSuccess = false;
}

// Check the file type
if (!in_array($fileExtension, $allowedFileTypes)) {
    echo "Only JPG, PNG, and GIF files are allowed.";
    $uploadSuccess = false;
}

// If no validation errors, move the uploaded file to the target directory
if ($uploadSuccess) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        echo "File uploaded successfully: " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
    } else {
        echo "File upload failed.";
    }
}
?>
