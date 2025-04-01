<!DOCTYPE html>
<html>

<head>
    <title>Welcome to PHP</title>
</head>

<body>
    <h1>PHP Code</h1>
    <?php

    class Calculator
    {
        private $num1;
        private $num2;


        public function __construct($num1, $num2)
        {
            $this->num1 = $num1;
            $this->num2 = $num2;
        }
        public function add()
        {
            return $this->num1 + $this->num2;
        }
        public function subtract()
        {
            return $this->num1 - $this->num2;
        }
        public function multiply()
        {
            return $this->num1 * $this->num2;
        }
    }

    $number1 = 10;
    $number2 = 5;

    $calculator = new Calculator($number1, $number2);

    echo "Addition: " . $calculator->add() . "<br>";
    echo "Subtraction: " . $calculator->subtract() . "<br>";
    echo "Multiplication: " . $calculator->multiply() . "<br>";

    ?>

</body>

</html>