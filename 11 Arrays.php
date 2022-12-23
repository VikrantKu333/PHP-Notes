<!-- PHP Arrays -->
<title>PHP Arrays</title>

<?php
#Indexed arrays - Arrays with a numeric index
$colors = array("Red", "Green", "Blue", "Black", "White");
echo $colors[2], "<br><br>";

foreach ($colors as $value) {
    echo "$value <br>";
}
echo "<hr>";

#Associative arrays - Arrays with named keys
$fruitsPrice = array("Papaya" => "85", "Apple" => "280", "Grapes" => "60", "Orange" => "100", "Mango" => "50");
echo $fruitsPrice['Grapes'], "<br><br>";

foreach ($fruitsPrice as $key => $value) {
    echo "$key : $value <br>";
}
echo "<hr>";

#Multidimensional arrays - Arrays containing one or more arrays
$multiDimension = array(
    array(7, 4, 1),
    array(8, 5, 2),
    array(9, 6, 3)
);
echo $multiDimension[1][1], "<br><br>";

for ($i = 0; $i < count($multiDimension); $i++) {
    for ($j = 0; $j < count($multiDimension[$i]); $j++) {
        echo $multiDimension[$i][$j], " ";
    }
    echo "<br>";
}
echo "<hr>";
?>