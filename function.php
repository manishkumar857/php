<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <?php
    // $sum=0;
    // function printodd(){
    //     for($i=0;$i<31;$i++)
    //     {
    //         if($i%2!=0){
    //             echo $i." ";
    //             global $sum;
    //             $sum=$sum+$i;
    //         }
    //     }
    //     echo $sum;
    // }
    // printodd();
    // ?>
    <?php
    
    // function area($radius){
    //     echo 3.14*$radius**2;
    // }
    // area(27);
    ?> 

    <?php
//    function strconvart($string,$isupper){
//     if($isupper){
//         return strtoupper($string);
//     }else{
//         return strtolower($string);
//     }}
//     $string = "Hello World! ";
//     $isupper = true;
//     $result = strconvart($string,$isupper);
//     echo $result;
//     $isupper = false;
//     $result = strconvart($string,$isupper);
//     echo $result;
    ?>


    <?php
    #variable function
    
    // function hello($a,$b){
    //     echo"Hello Variable Function !!!\n";
    //     echo $a+$b;
    // }
    // function a()
    // {
    //     echo "Hello normal function \n";
    // }

    // $func="hello";
    // $func(4,5);
    // a();

    #Anonymys function
    // $noname = function($a,$b)
    // {
    //     return "Hello, Anonmymous Function!".$a+$b;
    // };
    // echo $noname(10,15);

    #php call by reference
    function increment(&$num){
        $num++;
    }
    $value=5;
    increment($value);
    echo $value;
    ?>
</body>
</html>