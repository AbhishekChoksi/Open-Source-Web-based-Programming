<?php
/*
function functionName(parameters)
{
    function-body
}
*/
function generateFooter()
{
    echo "Copyright 2021 Abhishek Choksi";
}
generateFooter();

//Passing Arguments by Value
function calcSalesTax($price, $tax)
{
    $total = $price + ($price * $tax); 
    echo "Total cost: $total";
}

echo '<br/>';

//Passing Arguments by Reference
$cost = 20.99;
$tax = 0.0575;
function calculateCost(&$cost, $tax)
{
    // Modify the $cost variable
    $cost = $cost + ($cost * $tax);
    // Perform some random change to the $tax variable.
    $tax += 4;
}
calculateCost($cost, $tax);
printf("Tax is %01.2f%% ", $tax*100);
printf("Cost is: $%01.2f", $cost);
?>