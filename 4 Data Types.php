<!-- PHP Data Types -->
<title>PHP Data Types</title>

<?php
#PHP Data Types
// String
$text = 'Hello India';
echo var_dump($text);
echo '<br>';
// Integer
$number = 45;
echo var_dump($number);
echo '<br>';
// Float (floating point numbers - also called double)
$decimal = 69.32;
echo var_dump($decimal);
echo '<br>';
// Boolean
$yes = true;
$no = false;
echo var_dump($yes);
echo '<br>';
echo var_dump($no);
echo '<br>';
// Array
$animals = array('Cow', 'Rat', 'Dog', 'Cat', 'Ox');
echo var_dump($animals);
echo '<br>';
// Object

// NULL
$empty = null;
echo var_dump($empty);
echo '<br>';
// Resource
/*
The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.

A common example of using the resource data type is a database call.
*/
?>