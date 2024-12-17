<?php
session_start();  // Start the session to store the CAPTCHA

// Generate a random CAPTCHA string
$captcha_code = '';
$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
for ($i = 0; $i < 6; $i++) {
    $captcha_code .= $characters[rand(0, strlen($characters) - 1)];
}

// Store the CAPTCHA code in the session
$_SESSION['captcha_code'] = $captcha_code;

// Set the content type for the browser to display the image
header('Content-Type: image/png');

// Create a blank image (200x50 pixels)
$image = imagecreatetruecolor(200, 50);

// Allocate colors
$background_color = imagecolorallocate($image, 255, 255, 255);  // White
$text_color = imagecolorallocate($image, 0, 0, 0);  // Black
$line_color = imagecolorallocate($image, 64, 64, 64);  // Gray

// Fill the image with the background color
imagefill($image, 0, 0, $background_color);

// Add some random lines for extra complexity
for ($i = 0; $i < 5; $i++) {
    imageline($image, rand(0, 200), rand(0, 50), rand(0, 200), rand(0, 50), $line_color);
}

// Add the CAPTCHA text to the image
imagestring($image, 5, 70, 15, $captcha_code, $text_color);

// Output the image to the browser
imagepng($image);

// Clean up the image resource
imagedestroy($image);
?>

