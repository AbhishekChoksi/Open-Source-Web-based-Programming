<?php
// echo, print(), sprintf() and print_r()
// print()
print("<p>I love India</p>");
// echo
echo "BMIIT is The Best Institute";
echo '<br/>';
// sprintf()
$number = 5;
$str = "BMIIT";
$txt = sprintf("%u Integrated MSc IT %s",$number,$str);
echo $txt;
// print_r()
$arr = array(1,2,3,4);
echo '<br><pre>';
print_r($arr);
echo '</pre>';
?>