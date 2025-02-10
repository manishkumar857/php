<doctype html5>
<html>
<head>
<title>welcome to php</title>
</head>
<body >
<h1>Php code</h1>
<?php
// $array=[1,2,3];

// array_push($array,4,5);
// print_r($array);

// array_unshift($array,0);

// print_r($array);

// // Remove element
// array_pop($array);
// print_r($array);

// array_shift($array);
// print_r($array);


// $array=[3,1,4,2];

// sort($array);
// print_r($array);


// rsort($array);

// print_r($array);

// $array=['apple','banana', 'cherry'];

// if (in_array('bananna', $array)) {
//     echo"Banana is found\n";
// }


// $key=array_search('cherry',$array);
// echo "Cherry is at index:$key\n";


// $a1=[1,2];
// $a2=[3,4];

// $merged=array_merge($a1,$a2);
// print_r($merged);

// $sliced=array_slice($merged,1,2);

// print_r($sliced);


$array=[1,2,2,3,3,3];

$countValues = array_count_values($array);
print_r($countValues);

$unique=array_unique($array);
print_r($unique);

?>

</body>
</html>