<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Employee {
    private $name;
    private $salary;
    private $bonus;

    public function setName($name) {
        $this->name = $name;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function setBonus($bonus) {
        $this->bonus = $bonus;
    }

    public function calculateSalary() {
        return $this->salary + $this->bonus;
    }

    public function display() {
        echo "Employee Name: " . $this->name . "<br>";
        echo "Base Salary: $" . number_format($this->salary, 2) . "<br>";
        echo "Bonus: $" . number_format($this->bonus, 2) . "<br>";
        echo "Total Salary: $" . number_format($this->calculateSalary(), 2) . "<br>";
    }
}

$employee1 = new Employee();
$employee1->setName("Soumya Patra");
$employee1->setSalary(50000);
$employee1->setBonus(5000);
$employee1->display();
?>
</body>
</html>