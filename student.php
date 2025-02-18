<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Student Management System</h1>
    <form method="post" action = "">
        <label for="studentName">Enter the student name : </label>
        <input type="text" id="studentName" name="studentName" required>
        <button type="submit">Check</button>
    </form>
    <?php
    $students = "manish,rahul,ajay,rohit,deep";
    $inputname = $_POST["studentName"];
    $studentsarr = explode(",", $students);
    if(in_array($inputname,$studentsarr))
    {
        echo"student found in the list";
    }else{
        echo "student not found in the list";
    }
    ?>
</body>
</html>