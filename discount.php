<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Discount Calculator </title>
</head>
<body>

<h1>Final Amount After Discount : </h1>
    <form method="post" action="">
        <label for="amount">Enter Amount:</label>
        <input type="text" id="amount" name="amount" required>
        <button type="submit">Calculate the discount </button>
    </form>
    
<?php
function DiscountAp($amount){
    if($amount>200)
    {
        $newamount =  $amount - ($amount * 0.10);
    }
    else{
        $newamount = $amount;
    }

    return $newamount;
}

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $amount= $_POST["amount"];
        $finalamount = DiscountAp($amount);
        echo "Amount after the discount is applied  ".$finalamount;
    }

?>
</body>
</html>