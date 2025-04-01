<!DOCTYPE html>
<html>
<head>
    <title>Welcome to PHP</title>
</head>
<body>
    <h1>PHP Code</h1>
    <?php
    // class Cal {
    //     public function add($num1, $num2) {
    //         return $num1 + $num2;
    //     }
    // }

    // $cal1 = new Cal();
    
    // echo "The sum is: " . $cal1->add(2, 3);

    class Car{
        public $brand;

        public function_construct($brand){
            $this->brand = $brand;
            echo "A new car of brand $brand has been created !<br> ";
        
        }
        //destructor method
        public function_destruct(){
            echo "The car of brand { $this->brand} is being destroyed.<br>";
        }

        //creating an object
        $car1 = new Car("Toyota");

        //unsetting the object manually
        unset($car1);

        echo "End of Script .";
    }
    ?>
    
</body>
</html>
