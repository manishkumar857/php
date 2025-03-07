<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="number">"enter a number : "</label>
        <input type="number" name = "number" id="number" required>
        <button type="submit">check</button>
</form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $number = $_POST["number"];
        if ($number % 2 == 0) {
            echo "<p>The number $number is <strong>Even</strong>.</p>";
        } else {
            echo "<p>The number $number is <strong>Odd</strong>.</p>";
        }
    }
    ?>
   
</body>
</html>