<?php
print_r($_FILES);
echo "<br />";
// Define the target directory to store the uploaded files
$targetDirectory = "uploads/";

// Ensure the uploads directory exists, create it if not
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Define the maximum file size (10MB)
$maxFileSize = 2 * 1024 * 1024; // 10MB

// Define allowed file types
$allowedFileTypes = array("jpg", "png", "gif");

// Loop through each uploaded file
foreach ($_FILES["filesToUpload"]["name"] as $key => $fileName) {
    $uploadSuccess = true;
    $targetFile = $targetDirectory . basename($fileName);
    $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check for upload errors
    if ($_FILES["filesToUpload"]["error"][$key] !== UPLOAD_ERR_OK) {
        echo "Error uploading file: " . $fileName . " (Error code: " . $_FILES["filesToUpload"]["error"][$key] . ")";
        $uploadSuccess = false;
    }

    // Check the file size
    if ($_FILES["filesToUpload"]["size"][$key] > $maxFileSize) {
        echo "File size exceeds the limit of 10MB for: " . $fileName;
        $uploadSuccess = false;
    }

    // Check the file type
    if (!in_array($fileExtension, $allowedFileTypes)) {
        echo "Only JPG, PNG, and GIF files are allowed for: " . $fileName;
        $uploadSuccess = false;
    }

    // If no validation errors, move the uploaded file to the target directory
    if ($uploadSuccess) {
        if (move_uploaded_file($_FILES["filesToUpload"]["tmp_name"][$key], $targetFile)) {
            echo "File uploaded successfully: " . htmlspecialchars($fileName) . "<br>";
        } else {
            echo "Failed to upload file: " . $fileName . "<br>";
        }
    }
}
?>

