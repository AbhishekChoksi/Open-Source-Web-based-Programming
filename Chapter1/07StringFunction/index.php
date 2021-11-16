<?php
// String Concatenation Operator – dot ( . ) 
$string1 = "Hello World"; 
$string2 = "1234";
echo $string1 . " " . $string2;

echo '<br/>';

// strlen(): Returns length of string.
echo 'The length of string 1 is '. strlen($string1);

echo '<br/>';

// • str_word_count(): It is used to counts the number of words in a string:.
echo str_word_count("Hello world!"); // outputs 2

echo '<br/>';

// • strrev() : Used to reverse string.
echo strrev("BMIIT"); // outputs TIIMB
// Replace Text Within a String

echo '<br/>';

// • strpos(): It is used to search for a string or character within a string.
echo "Hello world!" . '<br/>';
echo strpos("Hello world!","world!"); // Output 6

echo '<br/>';

// • str_replace(): Replace Text Within a String
echo str_replace("world", "Abhishek", "Hello world!"); // outputs Hello Abhishek!


/*
• Ucwords(): is used to convert first alphabet of every word into uppercase.
• echo ucwords(“welcome to the php world”); // Welcome To The Php World
• Strtoupper() is used to convert a whole string into uppercase.
• Strtolower() is used to convert a string into lowercase.
• Strcmp(string1,string2) : You can compare two strings by using strcmp(). 
• It returns output either greater than zero, less than zero or equal to zero. 
• If string 1 is greater than string 2 then it returns greater than zero. 
• If string 1 is less than string 2 then it returns less than zero. 
• It returns zero, if the strings are equal.
*/

/*
•  Maths Function 
• Date Function
• User Define Function
 */
?>