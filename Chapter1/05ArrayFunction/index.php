<?php
/*
                        Explode
-------------------------------------------------------------------------
• Explode is equivalent of split. It takes an argument of a string and a 
delimiter and returns an array consisting of substrings of the string.
• The explode() function breaks a string into an array.
*/
$str = "a:b:c:d";
$ar = explode(":",$str);
echo $str;
echo '<br><pre>';
print_r($ar);
echo '</pre>';

echo '<br/>';
/*
                        Implode
-------------------------------------------------------------------------
• Implode does the inverse. It takes an array and returns a string where the 
entries are appended together using a delimiter.
*/
$str = implode("^",$ar);
echo $str;

/*                 Delete particular element from array
-------------------------------------------------------------------------
• Unset Function : Used to delete element as per assigned array index
*/
$a=array(1,2,3);
unset($a[0]);
echo '<br><pre>';
print_r($a);
echo '</pre>';

/*
• Array_diff() : The array_diff() function compares the values of two (or more) arrays, and 
returns the differences.This function compares the values of two (or more) arrays, and return an 
array that contains the entries from array1 that are not present in array2 or array3, etc.
*/
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"black","g"=>"purple");
$a3=array("a"=>"red","b"=>"black","h"=>"yellow");
$result=array_diff($a1,$a2,$a3);
echo '<br><pre>';
print_r($result);
echo '</pre>';
echo '<br/>';
?>