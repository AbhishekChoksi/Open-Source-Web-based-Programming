<?php
/*
                            Variable Scope
--------------------------------------------------------------------------------
PHP has three different variable scopes:
• Local - A variable declared within a function and can only be accessed 
within that function.
• Global - Declared outside a function and can only be accessed outside a 
function.
• Static - The static keyword is used to declare variables in a function which 
keep their value after the function has ended.
*/

$a= 2.2888800;
$b= 2.2111200;
$c= $a+ $b;
print("$a + $b= $c<br>");

// Create Constant Variable
define("PI",3.14);
echo PI;

/*
                        PHP's Supported Data Type
--------------------------------------------------------------------------------
Scalar Data Types – Stores Single Value
• Boolean
• Integer
• Float
• String
Compound Data Types – Store Multiple values
• Array
• Object
*/

// var_dump() function returns the data type and value
$x = 5985;
var_dump($x);

$s= array("Student1","Student2","Strudent3");
var_dump($s)
?>