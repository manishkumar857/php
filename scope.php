<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    $x =10;
    $z=19;

    function test(){
        #echo $x; #error for using global inside local
        global $x; #global keyword to access global variable
        echo $x."<br>";
    }
    test();

    function local(){
        $y=20;
        echo $y."<br>";
        
    }
    local();

    #modify global variable inside function using index

    function index(){
        $GLOBALS['x'] = $GLOBALS['x']+$GLOBALS['z'];
        global $x;
        echo $x."<br>";
    }
    index();

    #static - variable will not be deleted after execution
    
    function statkey(){
        $g =8;
        echo $g;
        $g++;
    }
    statkey();
    statkey();

    function statkey2(){
        static $g =8;
        echo $g;
        $g++;
    }
    statkey2();
    statkey2();


    ?>
    
</body>
</html>