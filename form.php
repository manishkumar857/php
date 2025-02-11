<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
</head>
<body>

    <h2 >Student Registration Form</h2>

    <form method="post">
        <table  border="1" >
            <tr>
                <td><label for="name">Full Name:</label></td>
                <td><input type="text" name="name" id="name" required></td>
            </tr>
            <tr>
                <td><label for="mobile">Mobile Number:</label></td>
                <td><input type="text" name="mobile" id="mobile" required></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" name="email" id="email" required></td>
            </tr>
            <tr>
                <td><label for="course">Course:</label></td>
                <td><input type="text" name="course" id="course" required></td>
            </tr>
            <tr>
                <td><label for="address">Address:</label></td>
                <td><textarea name="address" id="address" required></textarea></td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Submit</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        $name = htmlspecialchars($_POST["name"]);
        $mobile = htmlspecialchars($_POST["mobile"]);
        $email = htmlspecialchars($_POST["email"]);
        $course = htmlspecialchars($_POST["course"]);
        $address = htmlspecialchars($_POST["address"]);

        echo "<h3 style='text-align: center;'>Student Details:</h3>";
        echo "<table align='center' border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><td><strong>Name:</strong></td><td>$name</td></tr>";
        echo "<tr><td><strong>Mobile:</strong></td><td>$mobile</td></tr>";
        echo "<tr><td><strong>Email:</strong></td><td>$email</td></tr>";
        echo "<tr><td><strong>Course:</strong></td><td>$course</td></tr>";
        echo "<tr><td><strong>Address:</strong></td><td>$address</td></tr>";
        echo "</table>";
    }
    ?>

</body>
</html>