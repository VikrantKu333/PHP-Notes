<!-- PHP Variables and Scope -->
<title>PHP Variables and Scope</title>

<?php
#PHP Variables
$text = "Hello World";
$number = 55;
$floatingNumber = 12.5;

echo $text, "<br>";
echo "$number<br>$floatingNumber<br>";
echo $number + $floatingNumber;
echo "<br>Your World! " . $text . "!";
echo "<hr>";

#PHP Variables Scope
$number_1 = 15;                                 //Global Variable
$number_2 = 26;                                 //Global Variable
$total = $number_1 + $number_2;                 //Global Variable
echo "Global Scope : $total<br>";
# = = = = =
function add()
{
    $number_3 = 5;                          //Local Variable
    $number_4 = 6;                          //Local Variable
    $addition = $number_3 + $number_4;      //Local Variable
    echo "Local Scope : $addition<br>";
    //The global keyword is used to access a global variable from within a function.
    global $number_1, $number_2, $total;    //Global Keyword
    $number_1 = 29;
    $number_2 = 69;
    $total = $number_1 + $number_2;
}
add();
echo "Global Keyword Use : $total<br>";
# = = = = =
function increment()
{
    static $x = 0;          //Static Keyword
    echo "Static Keyword Use : $x <br>";
    $x++;
}
increment();
increment();
increment();
?>