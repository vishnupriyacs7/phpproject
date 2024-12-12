<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple hard-coded check for username and password
    if ($username == "101" && $password == "101") {
        $_SESSION['username'] = $username;//101
        header("Location: home.php");//header(Location : path);
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">
        Username: <input type="text" name="username" required><span>valid username 101</span><br>
        Password: <input type="password" name="password" required><span>valid password 101</span><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
