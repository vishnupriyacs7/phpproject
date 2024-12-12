<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "phpnew";
    $conn = new mysqli($servername, $username, $password,$database);

    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }else{
    //     echo "connection established..";
    // }

    //to create a new db
    // $sql = "CREATE DATABASE phpnew"; 
    // if ($conn->query($sql) === true) {
    //     echo "Database created successfully";
    // } else { 
    //     echo "Error creating database: " . $conn->error;
    // }

    //create a new table
    // $sql = "CREATE TABLE mytable ( id INT(6) AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30) NOT NULL,email VARCHAR(50) NOT NULL)";

    // if ($conn->query($sql) === true) {
    //     echo "Table created successfully";
    // } else {
    //     echo "Error creating table: " . $conn->error;
    // }

    //insert data
    // $sql = "INSERT INTO mytable (name, email) VALUES ('John Doe', 'john@example.com')"; 
    // if ($conn->query($sql) === true) {
    //     echo "Data inserted successfully";
    // } else { 
    //     echo "Error inserting data: " . $conn->error;
    // }

    //data retrieval
    // $sql = "SELECT * FROM mytable"; 
    // $result = $conn->query($sql); 
    // if ($result->num_rows > 0) {
    //     while ($row = $result->fetch_assoc()) {
    //         echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
    //     }
    // } else { 
    //     echo "No data found";
    // }

    //delete data from table
    $sql = "DELETE FROM mytable WHERE id = 1"; 
    if ($conn->query($sql) === true) {
        echo "Data deleted successfully";
    } else { 
        echo "Error deleting data: " . $conn->error;
    }
    
    $conn->close();

?>