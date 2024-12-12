<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <style>
        li{
            color : red;
        }
        .success{
            color: green;
        }
    </style>
</head>
<body>
    <!-- The form should submit to the same page or to another processing page -->
    <form action="" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" value="">
        <br>
        <input type="submit" value="Submit">
    </form>

    <?php
    $errors = []; // Array to store validation errors

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the form data
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        // Validate the form data
        if (empty($username)) {
            $errors[] = 'Username is required';
        }

        if (empty($password)) {
            $errors[] = 'Password is required';
        }

        // If there are no validation errors, process the data
        if (empty($errors)) {
            // Perform your further processing here, such as saving to the database
            // For example, you can check the credentials or insert into a database
            $successMessage = "Form submitted successfully!";
        } else {
            // Display validation errors
            echo '<div class="error">';
            echo '<ul>';
            foreach ($errors as $error) {
                echo '<li>' . $error . '</li>';
            }
            echo '</ul>';
            echo '</div>';
        }

    }

    if (isset($successMessage)) {
        echo '<div class="success">' . $successMessage. '</div>';
    }
    ?>
</body>
</html>
