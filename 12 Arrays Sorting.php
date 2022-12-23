<!-- PHP Sorting Arrays -->
<title>PHP Sorting Arrays | Sort Functions For Arrays</title>

<?php
// Indexed arrays - Arrays with a numeric index
$colors = array("Red", "Green", "Blue", "Black", "White");
foreach ($colors as $value) {
    echo "$value <br>";
}
echo "<hr>";

#sort() - sort arrays in ascending order
sort($colors);
foreach ($colors as $value) {
    echo "$value <br>";
}
echo "<hr>";

#rsort() - sort arrays in descending order
rsort($colors);
foreach ($colors as $value) {
    echo "$value <br>";
}
echo "<hr>";

// Associative arrays - Arrays with named keys
$fruitsPrice = array("Papaya" => "85", "Apple" => "280", "Grapes" => "60", "Orange" => "100", "Mango" => "50");
foreach ($fruitsPrice as $key => $value) {
    echo "$key : $value <br>";
}
echo "<hr>";

#asort() - sort associative arrays in ascending order, according to the value
asort($fruitsPrice);
foreach ($fruitsPrice as $key => $value) {
    echo "$key : $value <br>";
}
echo "<hr>";

#ksort() - sort associative arrays in ascending order, according to the key
ksort($fruitsPrice);
foreach ($fruitsPrice as $key => $value) {
    echo "$key : $value <br>";
}
echo "<hr>";

#arsort() - sort associative arrays in descending order, according to the value
arsort($fruitsPrice);
foreach ($fruitsPrice as $key => $value) {
    echo "$key : $value <br>";
}
echo "<hr>";

#krsort() - sort associative arrays in descending order, according to the key
krsort($fruitsPrice);
foreach ($fruitsPrice as $key => $value) {
    echo "$key : $value <br>";
}
echo "<hr>";
?>