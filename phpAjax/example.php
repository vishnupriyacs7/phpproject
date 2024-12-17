<!DOCTYPE html>
<html>
    <head>
        <title>Ajax Example</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                // Handle form submission using Ajax
                $('#myForm').submit(function(e) {
                    e.preventDefault(); // Prevent form submission 
                    // Get form data
                    var formData = $(this).serialize();
                    // Send Ajax request
                    $.ajax({ 
                        url: 'form.php', 
                        type: 'POST',
                        data: formData,
                        success: function(response) {
                            // Handle the response from the server
                            $('#result').html(response);
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        <form id="myForm" method="POST">
            <!-- Form fields -->
            <input type="text" name="name" placeholder="Enter your name">
            <input type="email" name="email" placeholder="Enter your email">
            <button type="submit">Submit</button>
        </form>
        <div id="result"></div>
    </body>
</html>


