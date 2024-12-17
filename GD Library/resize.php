<?php
$source_image = imagecreatefromjpeg('img.jpg'); // Change the path to your image

// Get the original width and height
list($width, $height) = getimagesize('img.jpg');

// Set the new dimensions
$new_width = 100;
$new_height = ($height / $width) * $new_width; // Maintain aspect ratio

// Create a blank image with the new dimensions
$resized_image = imagecreatetruecolor($new_width, $new_height);

// Copy and resize the source image into the resized image
imagecopyresampled($resized_image, $source_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

// Output the resized image
header('Content-Type: image/jpeg');
imagejpeg($resized_image);

// Clean up resources
imagedestroy($source_image);
imagedestroy($resized_image);
?>
