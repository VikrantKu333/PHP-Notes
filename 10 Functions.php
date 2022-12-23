<!-- PHP Functions -->
<title>PHP Functions</title>

<?php
//PHP User Defined Functions

#Function Without Arguments
function message()
{
    echo "You always pass failure on the way to success.";
}
message();
echo "<hr>";

#Function With Arguments
function hello($name)
{
    echo "Hello $name";
}
hello('Vikrant');
echo "<hr>";

#Function Return Value
function addNumbers($number_1, $number_2)
{
    return $number_1 + $number_2;
}
echo addNumbers(5, 6);
echo "<hr>";
?>