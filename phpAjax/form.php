<?php
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email']; // Perform server-side operations
    // ...
    // Prepare the response
    $response = "Hello, $name! Your email is $email."; // Send the response back to the client 
    echo $response; 
?>
