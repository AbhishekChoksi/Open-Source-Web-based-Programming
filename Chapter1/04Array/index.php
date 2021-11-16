<?php
/*
An array is a data structure that stores one or more similar type of values in a single value.
• Numeric array − An array with a numeric index. Values are stored and accessed in linear fashion. Index start with 0.
• Associative array − An array with strings as index. This stores element values in association 
with key values rather than in a strict linear index order.
• Multidimensional array − An array containing one or more arrays and values are accessed using multiple indices
*/

/* 
                     Numeric Array
------------------------------------------------------------
- A numeric array stores each element with a numeric ID key.
- 2 ways to write a numeric array.
    - Automatically
    - Manually
*/
// Automatically
$numbers = array( 1, 2, 3, 4, 5);
echo '<br><pre>';
print_r($numbers);
echo '</pre>';
// Manually
$no[0] = 1;
$no[1] =2;
$no[2] = 3;
$no[3] = 4;
$no[] = 5; // to append value in an array
echo '<br><pre>';
print_r($no);
echo '</pre>';

// To access specific value
echo $numbers[0] . " and " . $numbers[2] ;

echo '<br/>';

// To access all values
foreach( $numbers as $value ) {
    echo "Value is $value <br />"; 
}

/* 
                 Associative Array
------------------------------------------------------------
• Associative array will have their index as string.
• An associative array, each ID key is associated with a value.
• When storing data about specific named values, a numerical array is not 
always the best way to do it.
• With associative arrays we can use the values as keys and assign values to 
them.
*/

echo '<br/>';

// First way
$salaries = array("Jugnoo" => 2000, "Swiggy" => 1000, "Zomato" => 500);

foreach( $salaries as $value ) {
    echo $value . '<br/>'; 
}
echo '<br/>';
// Second Way
$salaries['Jugnoo'] = "high";
$salaries['Swiggy'] = "medium";
$salaries['Zomato'] = "low";
foreach( $salaries as $value ) {
    echo $value . '<br/>'; 
}

echo '<br/>';
/* 
                 Multidimensional Array
------------------------------------------------------------
- In a multidimensional array, each element in the main array can also 
be an array. 
- Each element in the sub-array can be an array, and so on.
*/
$AmazonProducts = array(
    array("BOOK", "Books", 50),
    array("DVDs", "Movies", 15),
    array("CDs", "Music", 20)
    );

for ($row = 0; $row < 3; $row++) {
    for ($column = 0; $column < 3; $column++)
    {
        echo $AmazonProducts[$row][$column] . '&nbsp;';
    }
    echo '<br/>';
}
echo '<br/>';
echo '<br><pre>';
print_r($AmazonProducts);
echo '</pre>';

$AmazonProducts = array( 
    array("Code" =>"BOOK", "Description" => "Books", "Price" => 50),
    array("Code" => "DVDs","Description" => "Movies","Price" => 15),
    array("Code" => "CDs", "Description" => "Music", "Price" => 20)
    );

for ($row = 0; $row < 3; $row++)
{ 
    echo $AmazonProducts[$row]["Code"]. "&nbsp;" . 
    $AmazonProducts[$row]["Description"]. "&nbsp;" . 
    $AmazonProducts[$row]["Price"] . "<br/>";
}
echo '<br/>';
echo '<br><pre>';
print_r($AmazonProducts);
echo '</pre>';
?>