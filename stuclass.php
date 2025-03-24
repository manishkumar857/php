<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Student
    {
        private $age;
        private $course;

        public function __construct($name, $age, $course)
        {
            $this->name = $name;
            $this->age = $age;
            $this->course = $course;
        }
        public function displayInfo()
        {
            echo "name: " . $this->name . "\n";
            echo "Age: " . $this->age . "\n";
            echo "Course: " . $this->course . "\n";
        }
    }

    // Example usage:
    $student1 = new Student("Manish  ", 21, "Computer Applications");
    $student1->displayInfo();


    ?>
</body>

</html>