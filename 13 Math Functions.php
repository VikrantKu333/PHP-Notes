<!-- PHP Math Functions -->
<title>PHP Math Functions</title>

<?php
echo "PI Value : " . (pi());                                                    //Returns 3.1415926535898
echo "<br>";
echo "Lowest Value : " . (min(0, 150, 30, 20, -8, -200));                       // returns -200
echo "<br>";
echo "Highest Value : " . (max(0, 150, 30, 20, -8, -200));                      // returns 150
echo "<br>";
echo "Absolute (Positive) Value : " . (abs(-6.7));                              // returns 6.7
echo "<br>";
echo "Square Root : " . (sqrt(64));                                             // returns 8
echo "<br>";
echo "Rounds a floating-point : " . (round(0.50));                              // returns 1
echo "<br>";
echo "Rounds a floating-point : " . (round(0.49));                              // returns 0
echo "<br>";
echo "Random Number : " . (rand());                                             // Generates a random integer number
echo "<br>";
echo "Random Number between 10 and 100 (Inclusive) : " . (rand(10, 100));       // Generates a random integer number between 10 and 100 (Inclusive)
echo "<br>";
?>