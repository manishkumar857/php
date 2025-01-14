<!DOCTYPE html>
<html>
<body>
    <?php
    $txt = "Hello World";
    $x=5;
    $y=10.5;

    #comment
    //comment

    echo $txt;
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    echo var_dump($x); #to get variable type

    echo "the value of x is $x";
    echo "<br>";
    echo "the value of y is ".$y."<br>";

    echo "the sum of x and y is ".$x+$y;
    ?>

    </body>
    </html>