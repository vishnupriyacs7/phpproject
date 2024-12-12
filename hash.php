<?php
$password = 'mypassword';
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
echo $password;
echo "<br />";
echo $hashedPassword;
echo "<br />";

if(password_verify($password,$hashedPassword)){
    echo "equal password";
}else{
    echo "not equal";
}
?>