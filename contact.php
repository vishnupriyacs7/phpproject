<?php
// Accessing the form data using $_REQUEST
$name = $_REQUEST['name'];
$message = $_REQUEST['message'];

echo "Name: " . $name . "<br>";
echo "Message: " . $message;
?>