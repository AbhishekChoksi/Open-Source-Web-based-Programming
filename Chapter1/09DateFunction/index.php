<?php
/*
• SYNTAX :
    date (format,timestamp);
• Characters which represents format are:
    • d : day of life (01 to 31)
    • m:current month (01 to 12) 
    • Y : current year in 4 digits
    • / . - : used to separate
• A timestamp is the number of seconds since January 1, 1970 at 00:00:00 GMT.
• This is also known as the Unix Timestamp
*/

echo date("Y/m/d");
echo '<br/>';
echo date("Y.m.d");
echo '<br/>';
echo date("Y-m-d");
?>