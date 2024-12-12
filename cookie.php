<?php
print_r($_COOKIE);
$requestMethod = $_SERVER['REQUEST_METHOD']; 

if ($requestMethod == 'POST') { 
    $username = $_POST['username']; 
    $count = $_POST['count']; 

    if (empty($_COOKIE[$username])) {
        // If the cookie does not exist, set it with the count
        setcookie($username, $count, time() + (86400 * 30), "/"); // 30 days
        echo 'Cookie has been set with count: ' . $count;
    } else { 
        // If the cookie exists, show the previous and new values
        echo 'Previous count: ' . $_COOKIE[$username] . '<br>';
        // Update the cookie value (it will be updated in the next request)
        setcookie($username, $count, time() + (86400 * 30), "/"); 
        echo 'New count will be: ' . $count;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Document</title>
    </head>
    <body>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="number" name="count" placeholder="Number" required>
            <button type="submit">Submit</button>
        </form>
    </body> 
</html>

