<!-- PHP Global Variables - Superglobals -->
<title>PHP Global Variables - Superglobals</title>

<?php
#PHP Superglobal - $GLOBALS
$number_1 = 15;
$number_2 = 26;
function addition()
{
    $GLOBALS['total'] = $GLOBALS['number_1'] + $GLOBALS['number_2'];
}
addition();
echo $total;
echo "<hr>";

#PHP Superglobal - $_SERVER
echo $_SERVER['PHP_SELF'];          //Returns the filename of the currently executing script
echo "<br>";
echo $_SERVER['SERVER_NAME'];       //Returns the name of the host server
echo "<br>";
echo $_SERVER['HTTP_HOST'];         //Returns the Host header from the current request
echo "<br>";
echo $_SERVER['HTTP_REFERER'];      //Returns the complete URL of the current page
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];   //The value of the User-Agent header
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];       //Returns the path of the current script
echo "<hr>";

#PHP Superglobal - $_REQUEST

#PHP Superglobal - $_POST

#PHP Superglobal - $_GET

?>