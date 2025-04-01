<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
    class Furniture {
  
        public function __construct() {
            echo "This is a chair<br>";
        }
    
        public function Table() {
            echo "This is a table<br>";
        }
    
        public function Sofa() {
            echo "This is a sofa<br>";
        }
    
        public function Almirah() {
            $this->Table();
            $this->Sofa();
        }
    }
    
    
    $obj = new Furniture();
    
 
    $obj->Table();
    $obj->Sofa();
    $obj->Almirah();
    ?>
    
</body>
</html>