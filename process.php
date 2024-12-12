<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Get form data using $_POST

    print_r($_GET);
    $name = $_GET['name'];
    $email = $_GET['email'];

    // Display the submitted data
    echo "<h2>Form Submitted</h2>";
    echo "<p>Name: " . $name. "</p>";
    echo "<p>Email: " .$email . "</p>";
} else {
    echo "<p>No form data submitted.</p>";
}
?>