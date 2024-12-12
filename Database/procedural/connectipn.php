<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "php26";
    $conn = mysqli_connect($servername, $username, $password,$database); 
    
    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }else{
    //     echo "connection established";
    // }


    //table creation
    // $sql = "CREATE TABLE mytable ( id INT(6) AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30) NOT NULL,email VARCHAR(50) NOT NULL)";

    // if (mysqli_query($conn, $sql)) {
    //     echo "Table created successfully";
    // } else {
    //     echo "Error creating table: " . mysqli_error($conn);
    // }

    //insert data
    // $sql = "INSERT INTO mytable (name, email) VALUES ('Kate', 'kate@example.com')"; 
    // if (mysqli_query($conn, $sql)) {
    //     echo "Data inserted successfully";
    // } else { 
    //     echo "Error inserting data: " . mysqli_error($conn);
    // }


    //retrieve data from table
    $sql = "SELECT * FROM mytable";
    $result = mysqli_query($conn, $sql); 
    print_r($result);
    echo "<br/><br/><br/>";
    echo "Number of rows in result set : ".mysqli_num_rows($result);
    echo "<br/><br/><br/>";
    if (mysqli_num_rows($result) > 0) {
	    while($row=mysqli_fetch_assoc($result)) {
		    echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
	    }
    } else { 
        echo "No data found";
    }

    //to delete data
    $sql = "DELETE FROM mytable WHERE id = 2"; 
    if (mysqli_query($conn, $sql)) {
        echo "Data deleted successfully";
    } else { 
        echo "Error deleting data: " . mysqli_error($conn);
    }

    mysqli_close($conn);



?>