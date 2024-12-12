<?php
$string = "abbc";
$pattern = "/ab*c/";  // Matches 'a', followed by zero or more 'b's, then 'c'
preg_match($pattern, $string, $matches);
echo "Matched string: " . $matches[0];
?>