
<!---->

<!---->
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>

    <h2>Welcome!</h2>

    <?php
    // Check if the form was submitted using the POST method
    //                            KENE "POST"
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data and store it in variables
        // ['name kene sama'] & ikut turutan
        $name = $_POST['name'];
        $email = $_POST['email'];
        $matrix_id = $_POST['matrix_id'];
        $phone = $_POST['phone'];

        // Display the welcome message with user details
        echo "<p>Hello, <strong>$name</strong>!</p>";
        echo "<p>Your email: <strong>$email</strong></p>";
        echo "<p>Your Matrix ID: <strong>$matrix_id</strong></p>";
        echo "<p>Your Phone No: <strong>$phone</strong></p>";
    } else {
        echo "<p>No data received.</p>";
    }
    ?>

</body>
</html>
