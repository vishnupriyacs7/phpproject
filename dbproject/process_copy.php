<?php 
//database connection settings 
$servername="localhost";
$username="root"; 
$password=""; 
$dbname-"user_db"; 
//create a connection mysql 
$conn=new mysqli ($servername,$username, $password,$dbname); 
//check the connection 
if($conn->connect_error){
    die("connection failed:" .$conn->connect_error);
}  
//check if the form is submitted 
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $name =  $_POST['name'];
    $email=$_POST['email']; 
    $age-(int) $_POST['age']; 
    //insert data into the database 
    $sql="INSERT INTO users(name,email,age) VALUES ('$name','$email',$age)";
     if($conn->query($sql)===TRUE) {
        echo "new record created succeessfully! ";
     } else { 
        echo "error:". $sql. "<br)" .$conn->error; 
     } 
    }
 
//close the connection 
$conn->close();