<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $file = $_FILES['file'];
    echo "Username: " . $username . ".<br>";
    echo "Password: " . $password . "<br>";
    print_r($file);
?>