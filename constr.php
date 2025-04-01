<!DOCTYPE html>
<html>
<head>
    <title>Welcome to PHP</title>
</head>
<body>
    <h1>PHP Code</h1>
    <?php
    // class Car {
    //     public $brand;

    //     public function __construct($brand) {
    //         $this->brand = $brand;
    //         echo "A new car of brand $brand has been created<br>";
    //     } 
    // }

    // $car1 = new Car("Toyota");
    // $car2 = new Car("Honda");

    class student{
        public $name;

        public function_construct($name){
            $this->name = $name;
        }

        public function greet(){
            echo "Hello ,my name is ".$this->name."!<br>";

        }
    }
    public function introduce(){
        $this->greet();
    }
    $student1 = new Student("Alice");
    $student1->introduce();


    ?>
</body>
</html>