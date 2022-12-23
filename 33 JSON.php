<!-- PHP and JSON -->
<title>PHP and JSON </title>

<!-- JSON - JavaScript Object Notation -->



<style>
    h3 {
        padding: 10px;
        background-color: silver;
        border-radius: 10px;
    }

    b {
        color: red;
    }

    pre b {
        color: green;
    }

    pre {
        color: blue;
    }
</style>



<?php
// Encode an associative array into a JSON object - 
echo "<h3>Encode an associative array into a JSON object - </h3>";

$age = array("Niraj" => 30, "Suraj" => 27, "Rohit" => 25, "Shivam" => 24, "Vikrant" => 28);
echo "<b>Associative Array - </b>";
print_r($age);

echo "<pre>";
echo "<br><b>\tJSON Object - </b><br>" . json_encode($age);
echo "<br><b>\tJSON Object - </b><br>" . json_encode($age, JSON_PRETTY_PRINT);
echo "</pre>";
?>

<hr>

<?php
// Encode an indexed array into a JSON array - 
echo "<h3>Encode an indexed array into a JSON array - </h3>";

$cars = array("Tesla", "BMW", "Toyota", "Lamborghini", "Honda");
echo "<b>Indexed Array - </b>";
print_r($cars);

echo "<pre>";
echo "<br><b>\tJSON Array - </b><br>" . json_encode($cars);
echo "<br><b>\tJSON Array - </b><br>" . json_encode($cars, JSON_PRETTY_PRINT);
echo "</pre>";
?>

<hr>

<?php
// Decodes JSON data into a PHP object -
echo "<h3>Decodes JSON data into a PHP object - </h3>";

$json_data = '{"Niraj":30,"Suraj":27,"Rohit":25,"Shivam":24,"Vikrant":28}';
echo "<b>JSON Data - </b>$json_data<br>";

echo "<pre>";
echo "<b>\tPHP Object - </b><br>";
var_dump(json_decode($json_data));
echo "<b>\tPHP Object - </b><br>";
print_r(json_decode($json_data));
echo "</pre>";
?>

<hr>

<?php
// Decodes JSON data into a PHP associative array -
echo "<h3>Decodes JSON data into a PHP associative array - </h3>";

$json_data = '{"Niraj":30,"Suraj":27,"Rohit":25,"Shivam":24,"Vikrant":28}';
echo "<b>JSON Data - </b>$json_data<br>";

echo "<pre>";
echo "<b>\tPHP Associative Array - </b><br>";
var_dump(json_decode($json_data, true));
echo "<b>\tPHP Associative Array - </b><br>";
print_r(json_decode($json_data, true));
echo "</pre>";
?>