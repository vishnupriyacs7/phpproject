<?php
session_start(); // Start the session at the beginning of the script

$requestMethod = $_SERVER['REQUEST_METHOD']; // Get the request method
echo $requestMethod;
if ($requestMethod == 'POST') { 
    print_r($_SESSION);
    echo "<br />";
    $username = $_POST['username']; // Get username from form
    $count = $_POST['count']; // Get the count value from form
   
    if (empty($_SESSION[$username])) { 
        // If session does not have a value for the given username, create it
        $_SESSION[$username] = $count;					//$_SESSION['ANU'] =5;
        echo "Session created. Count is: " . $_SESSION[$username];
    } else { 
        // If session already exists for this username, show the previous value and update it
        echo 'Previous count: ' . $_SESSION[$username] . '<br>';
        $_SESSION[$username] = $count; // Update session value with new count		//10
        echo 'New count is: ' . $_SESSION[$username];
    }
    echo "<br />";
    print_r($_SESSION);
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Session Example</title> 
    </head>
    <body>
        <h2>Set and Update Session</h2>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="number" name="count" placeholder="Number" required>
            <button type="submit">Submit</button>
        </form>
    </body> 
</html>
