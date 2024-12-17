<?php
// Set the content type for the browser to display the image
header('Content-Type: image/png');

// Create a blank image (200x100 pixels)
$image = imagecreatetruecolor(500, 500);

// Allocate some colors
$background_color = imagecolorallocate($image, 255, 255, 255);  // White
$text_color = imagecolorallocate($image, 0, 0, 0);  // Black
$rectangle_color = imagecolorallocate($image, 255, 0, 0);  // Red

// Fill the image with the background color
//fills the entire image with a color.
//0, 0: These represent the x and y coordinates of the top-left corner of the image.
imagefill($image, 0, 0, $background_color);

// Draw a filled rectangle
//draws a filled rectangle on the image.
//50, 30: These represent the x and y coordinates of the top-left corner of the rectangle.
//150, 70: These represent the x and y coordinates of the bottom-right corner of the rectangle.
imagefilledrectangle($image, 90, 30, 150, 70, $rectangle_color);

// Add some text
//adds text onto the image.
//5: This is the font size for the text. The number 5 refers to a built-in font in GD, where the font sizes range from 1 (smallest) to 5 (largest). The larger the number, the larger the text.
//60, 40: These are the x and y coordinates for where the text will be placed. Here, the text will start at the point (60, 40) on the image.
imagestring($image, 5, 80, 40, 'Hello, GD!', $text_color);

// Output the image to the browser
// if you were saving the image to a file instead of sending it to the browser, you would specify a file path as a second argument
//     imagepng($image, 'path/to/save/image.png');
imagepng($image);

// Clean up the image resource
imagedestroy($image);
?>