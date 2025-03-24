<doctype html5>
<html>
<head>
<title>welcome to php</title>
</head>
<body >
<h1>Php code</h1>
<?php
class Animal{
    public $name;

    public function_construct($name){
        $this->name = $name;

    }
    public function makeSound(){
        echo "Some generic sound\n";

    }

}
class Dog extends Animal{
    public function makeSound(){
        echo$this->name."says Woof!Woof!\n;

    }
        }
    $dog = new Dog("Buddy");
    $dog->makeSound();
    Woof!


?>



</body>
</html>