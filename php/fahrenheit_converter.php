<?php
// Matric No: 2314145
// Name: AHMAD HAZIEM BIN AIMIE KHUSAIRIE

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values from the form
    $country = $_POST['country'];
    $fahrenheit = $_POST['fahrenheit'];

    // Convert Fahrenheit to Celsius
    $celsius = ($fahrenheit - 32) * 5 / 9;

    // Round the result to 2 decimal places
    $celsius = round($celsius, 2);

    // Display the result
    echo "<h2>Temperature Conversion Result</h2>";
    echo "<p>A country of <strong>$country</strong> is currently <strong>$celsius</strong> degree Celsius.</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fahrenheit to Celsius Converter</title>
</head>
<body>

    <h2>Fahrenheit to Celsius Converter</h2>

    <!-- Input form -->
    <form method="POST">
        <label>Country Name:</label>
        <input type="text" name="country" required>
        <br><br>

        <label>Fahrenheit Input:</label>
        <input type="number" name="fahrenheit" required>
        <br><br>

        <input type="submit" value="Convert">
    </form>

</body>
</html>
