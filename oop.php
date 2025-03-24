<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<?php
class car{
    public $brand;
    public $color;
    public $speed;

    public function drive(){
        return "Driving";
    }
}

$car1 = new car();
$car1->brand = "Toyota";    
$car1->color = "Red";
$car1->speed = 200;

echo $car1->drive();
echo "<br>";
echo $car1->brand;
echo "<br>";
echo $car1->color;
echo "<br>";
echo $car1->speed;
echo "<br>";
?>


</body>
</html>