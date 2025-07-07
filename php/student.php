<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

    <h2>Student Registration Form</h2>

    <!-- The form sends data to welcome.php using the POST method -->
 <!--                             KENE "POST"-->
    <form action="welcome.php" method="POST">
        <label>Name:</label>
        <input type="text" name="name" required>
        <br><br>

        <label>Email:</label>
        <input type="email" name="email" required>
        <br><br>

        <label>Matrix ID:</label>
        <input type="text" name="matrix_id" required>
        <br><br>

        <label>Phone No:</label>
        <input type="text" name="phone" required>
        <br><br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
