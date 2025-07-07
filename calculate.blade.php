<html>
    <?php
    // Check if the form was submitted using the POST method
    //                            KENE "POST"

    echo "<h1>Amstrong Number</h1>";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data and store it in variables
        // ['name kene sama'] & ikut turutan
        $number = $_POST['number'];

        // Display the welcome message with user details
        echo "<p><strong>$number</strong> is Armstrong Number</p>";

    } else {
        echo "<p>No data received.</p>";
    }

    echo "<button>Back</button>";
    ?>

</html>
