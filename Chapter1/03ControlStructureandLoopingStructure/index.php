<?php
/*
Control Structure 
• IF 
• Break
• Continue 
• Switch 
• Include
• Include once
• Require
• Require once
*/
//if else Statement 
$no = 5;
// $no = -5;
if ($no > 0) {
    echo "Number is Positive";
} else {
    echo "Number is Negative";
}

echo '<br/>';

// if elseif else Statement
// $n = -1;
// $n = 1;
$n = 0;
if ($n == 0) {
    echo "Number is Zero";
} else if ($n > 0) {
    echo "Number is Positive";
} else {
    echo "Number is Negative";
}

echo '<br/>';

// switch Statement
// $category = "news";
// $category = "weather";
// $category = "sports";
$category = "Abhishek";
switch ($category) {
    case "news":
        echo "<p>What's happening around the world</p>";
        break;
    case "weather":
        echo "<p>Your weekly forecast</p>";
        break;
    case "sports":
        echo "<p>Latest sports highlights</p>";
        break;
    default:
        echo "<p>Welcome to my web site</p>";
}

echo '<br/>';

/*
Looping Structure 
• While 
• For
• Do While
• foreach
*/
// while loop
echo "Using while loop<br/>----------------------<br/>";
$i = 0;
while ($i < 5) {
    echo $i + 1 . ' Abhishek Choksi' . '<br/>';
    $i++;
}

echo '<br/>';

// do while loop
echo "Using do while loop<br/>----------------------<br/>";
$i = 0;
do {
    echo $i + 1 . ' Abhishek Choksi' . '<br/>';
    $i++;
} while ($i < 5);

echo '<br/>';

// for loop
echo "Using for loop<br/>----------------------<br/>";
$strarr= array("Student1","Student2","Strudent3");
for($i = 0; $i < 3; $i++){
    echo $strarr[$i] . '<br/>';
}

echo '<br/>';

// foreach loop
echo "Using foreach loop<br/>----------------------<br/>";
$strarr= array("Student1","Student2","Strudent3");
foreach($strarr as $value){
    echo $value . '<br/>';
}
echo "<br/>Print key and value<br/>----------------------<br/>";
foreach($strarr as $key=>$value){
    echo $key .' => '. $value . '<br/>';
}
?>