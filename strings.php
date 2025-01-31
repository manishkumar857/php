<!DOCTYPE html>
<html>
<body>
    <?php
    $a="  Hello World";
    echo strlen($a)."<br>";
    echo str_word_count($a)."<br>";

    echo strpos($a,"World"); //find len of word in string

    echo strtoupper($a)."<br>";
    echo strtolower($a)."<br>";

    echo str_replace("World","Earth",$a)."<br>";
    echo strrev($a)."<br>";
    echo trim($a);//remove whitespaces from begining or end

    ?>
</body>
</html>