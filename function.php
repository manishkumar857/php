<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $sum=0;
    function printodd(){
        for($i=0;$i<31;$i++)
        {
            if($i%2!=0){
                echo $i." ";
                global $sum;
                $sum=$sum+$i;
            }
        }
        echo $sum;
    }
    printodd();
    ?>
    <?php
    
    function area($radius){
        echo 3.14*$radius**2;
    }
    area(27);
    ?>

    
</body>
</html>