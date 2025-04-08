<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    class book{
        private $Author;
        private $Title;
        private $Isdn;

        public function __construct($Author, $Title, $Isdn)
        {
            $this->Author = $Author;
            $this->Title = $Title;
            $this->Isdn = $Isdn;
        }
 
        public function displayInfo()
        { 
            echo "Author Name: " . $this->Author . "<br>"; 
            echo "Title: " . $this->Title . "<br>";
            echo "Isdn: " . $this->Isdn . "<br>";
        }
    }
    $book1 = new book("Manish Kumar", "Computer Applications","21");
    $book1->displayInfo();
    
    ?>

</body>
</html>