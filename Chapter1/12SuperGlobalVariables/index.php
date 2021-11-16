<?php
/*
• "superglobals” :- which means that they are always accessible, regardless of scope - and can access them from any function, class or file without having to do anything special.
• $GLOBALS
• $_SERVER
• $_REQUEST
• $_POST
• $_GET
• $_FILES
• $_COOKIE
• $_SESSION
*/

/*
• PHP $GLOBALS
    • $GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script.
    • PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.
• PHP $_SERVER
    • $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
    • All the server and execution environment related information is available in this associative array.
*/
// PHP $GLOBALS
$x = 75; $y = 25;
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;

echo '<br/><br/>';

// PHP $_SERVER
echo $_SERVER['PHP_SELF']. '<br/>';
echo $_SERVER['SERVER_NAME']. '<br/>';
echo $_SERVER['HTTP_HOST']. '<br/>';
// echo $_SERVER['HTTP_REFERER']. '<br/>';
echo $_SERVER['HTTP_USER_AGENT']. '<br/>';
echo $_SERVER['SCRIPT_NAME']. '<br/>';

echo '<br/><br/>';
echo '<b>$_SERVER Output</b>' . '<br/>';
echo '<pre>';
print_r($_SERVER);
echo '</pre>';
?>