<!-- PHP Operators -->
<title>PHP Operators</title>

<?php
#Arithmetic operators
$number_1 = 9;
$number_2 = 4;
echo "$number_1 + $number_2 = " . $number_1 + $number_2 . "<br>";       //Addition
echo "$number_1 - $number_2 = " . $number_1 - $number_2 . "<br>";       //Subtraction
echo "$number_1 * $number_2 = " . $number_1 * $number_2 . "<br>";       //Multiplication
echo "$number_1 / $number_2 = " . $number_1 / $number_2 . "<br>";       //Division
echo "$number_1 % $number_2 = " . $number_1 % $number_2 . "<br>";       //Modulus
echo "$number_1 ** $number_2 = " . $number_1 ** $number_2 . "<br>";     //Exponentiation
echo "<hr>";
#Assignment operators
$number_3 = 7;
$number_4 = 2;
echo "$number_3 += $number_4 = ", $number_3 += $number_4, "<br>";        //7 + 2 = 9
echo "$number_3 -= $number_4 = ", $number_3 -= $number_4, "<br>";        //9 - 2 = 7
echo "$number_3 *= $number_4 = ", $number_3 *= $number_4, "<br>";        //7 * 2 = 14
echo "$number_3 /= $number_4 = ", $number_3 /= $number_4, "<br>";        //14 / 2 = 7
echo "$number_3 %= $number_4 = ", $number_3 %= $number_4, "<br>";        //7 % 2 = 1
echo "<hr>";
#Comparison operators
$number_5 = 45;
$number_6 = 69;
echo "$number_5 == $number_6 : ", var_dump($number_5 == $number_6), "<br>";         //Equal
echo "$number_5 === $number_6 : ", var_dump($number_5 === $number_6), "<br>";       //Identical
echo "$number_5 != $number_6 : ", var_dump($number_5 != $number_6), "<br>";         //Not Equal
echo "$number_5 <> $number_6 : ", var_dump($number_5 <> $number_6), "<br>";         //Not Equal
echo "$number_5 !== $number_6 : ", var_dump($number_5 !== $number_6), "<br>";       //Not Identical
echo "$number_5 > $number_6 : ", var_dump($number_5 > $number_6), "<br>";           //Greater Than
echo "$number_5 < $number_6 : ", var_dump($number_5 < $number_6), "<br>";           //Less Than
echo "$number_5 >= $number_6 : ", var_dump($number_5 >= $number_6), "<br>";         //Greater Than or Equal To
echo "$number_5 <= $number_6 : ", var_dump($number_5 <= $number_6), "<br>";         //Less Than or Equal To 
echo "$number_5 <=> $number_6 : ", var_dump($number_5 <=> $number_6), "<br>";       //Spaceship
echo "<hr>";
#Increment/Decrement operators
$number_7 = 18;
echo "++$number_7 =", ++$number_7, "<br>";         //Pre-increment
echo "$number_7++ =", $number_7++, "<br>";         //Post-increment
echo "--$number_7 =", --$number_7, "<br>";         //Pre-decrement
echo "$number_7-- =", $number_7--, "<br>";         //Post-decrement
echo "<hr>";
#Logical operators
$yes = true;
$no = false;
echo "yes and no : ", var_dump($yes and $no), "<br>";       //And
echo "yes or no : ", var_dump($yes or $no), "<br>";         //Or
echo "yes xor no : ", var_dump($yes xor $no), "<br>";       //Xor
echo "yes && no : ", var_dump($yes && $no), "<br>";         //And
echo "yes || no : ", var_dump($yes || $no), "<br>";         //Or
echo "!yes : ", var_dump(!$yes), "<br>";                    //Not
echo "<hr>";
#String operators
$text_1 = "PHP ";
$text_2 = "Notes";
echo $text_1 . $text_2;     //Concatenation
$text_1 .= $text_2;         //Concatenation Assignment
echo "<br>", $text_1;
echo "<hr>";
#Array operators
$rgb = array("R" => "Red", "G" => "Green", "B" => "Blue");
$cmyk = array("C" => "Cyan", "M" => "Magenta", "Y" => "Yellow", "K" => "Key - Black");
print_r($rgb + $cmyk);                      //Union
echo var_dump($rgb == $cmyk), "<br>";       //Equality
echo var_dump($rgb === $cmyk), "<br>";      //Identity
echo var_dump($rgb != $cmyk), "<br>";       //Inequality
echo var_dump($rgb <> $cmyk), "<br>";       //Inequality
echo var_dump($rgb !== $cmyk), "<br>";      //Non-identity
echo "<hr>";
#Conditional assignment operators
echo "$number_5 < $number_6 : ", $result = ($number_5 < $number_6) ? $number_5 : $number_6, "<br>";         //Ternary
echo "$number_5 > $number_6 : ", $result = ($number_5 > $number_6) ? $number_5 : $number_6, "<br>";         //Ternary

// variable $color is "red" if $color does not exist or is null
// $color = "Green";
echo $color = $color ?? "Red";                                  //Null coalescing
echo "<br>";

// variable $userName is the value of $_GET['userName'] and 'Anonymous' if it does not exist
// $_GET['userName'] = 'Vikrant360';
echo $userName = $_GET["userName"] ?? "Anonymous";              //Null coalescing
?>