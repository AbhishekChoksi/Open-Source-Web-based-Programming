<?php
/*
• include
• include_once
• require
• require_once
*/
?>
<?php
/*
                        include
-------------------------------------------------------
•  One of the most useful tools is to insert another php script from a file into the current php script.
• The command 
    include("filename");
• This will import contents of a text file called filename and insert it at the include spot.
• Any PHP in the included text must be inside the <?php tags
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embedded Document</title>
</head>
<body>
    <center>
        <?php include 'menu.php'; ?> <br/>
        <h1>Welcome to my home page</h1>
    </center>
</body>
</html>

<?php
/*
                        require
-------------------------------------------------------
• Syntax and uses is as same as include() but the difference is that, 
if the file is not found the remaining script is also not executed.
*/

/*
                       include vs require
-------------------------------------------------------
• One big difference between include and require; when a file is included with the include statement and PHP cannot find it, the script will continue to execute.
• require will produce a fatal error (E_COMPILE_ERROR) and stop the script
• include will only produce a warning (E_WARNING) and the script will continue
• Use require when the file is required by the application.
• Use include when the file is not required and application should continue when file is not found.
*/

/*
Functional Difference :
include vs include_once : There is only one difference between include() and include_once(). If the code from a file has been already included then it will not be included again if we use include_once(). Means include_once() include the file only once at a time.

include vs require : if include() is not able to find a specified file on location at that time it will throw a warning however, it will not stop script execution. For the same scenario, require() will throw a fatal error and it will stop the script execution.

require vs require_once : There is only one difference between require() and require_once(). If the code from a file has been already included then it will not be included again if we use require_once(). Means require_once() include the file only once at a time.
*/
?>