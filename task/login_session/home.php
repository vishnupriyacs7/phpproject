<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: loginpage.php");
    exit();
}

echo "Welcome, " . $_SESSION['username'] . "!";
?>

<a href="logout.php">Logout</a>
