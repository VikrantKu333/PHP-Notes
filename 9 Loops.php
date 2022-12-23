<!-- PHP Loops -->
<title>PHP Loops</title>

<?php
#While Loop
$number = 1;
while ($number <= 10) {
    echo $number . "<br>";
    $number++;
}
echo "<hr>";
#Do While Loop
$number = 10;
do {
    echo $number . "<br>";
    $number += 10;
} while ($number <= 100);
echo "<hr>";
#For Loop
for ($number = 11; $number <= 99; $number += 11) {
    echo $number . "<br>";
}
echo "<hr>";
#Foreach Loop
$colors = array("Red", "Green", "Blue", "Black", "White");
foreach ($colors as $value) {
    echo "$value <br>";
}
echo "<br>";
$fruitsPrice = array("Papaya" => "85", "Apple" => "280", "Grapes" => "60", "Orange" => "100", "Mango" => "50");
foreach ($fruitsPrice as $key => $value) {
    echo "$key : $value <br>";
}
?>