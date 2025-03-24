<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class car
    {
        public $brand;
        public $color;

        public function __construct($brand, $color)
        {
            $this->brand = $brand;
            $this->color = $color;
            echo "A car $brand is created<br>";
        }
        public function __destruct()
        {
            echo "A car obj is being destroyed <br>";
        }
    }
    $myCar = new car("Honda", "Blue");

    echo "Brand: ".$myCar->brand."<br>";
    echo "color: ".$myCar->color."<br>";


    ?>
</body>

</html>