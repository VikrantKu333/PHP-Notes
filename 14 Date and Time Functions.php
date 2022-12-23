<!-- PHP Date and Time Functions -->
<title>PHP Date and Time Functions</title>

<?php
#Set Time Zone
date_default_timezone_set("Asia/Kolkata");
#Get Time Zone
echo date_default_timezone_get();
echo "<hr>";

#Date
echo "Day (01 - 31) : " . date("d") . "<br>";
echo "Month (01 - 12) : " . date("m") . "<br>";
echo "Year (Four Digits) : " . date("Y") . "<br>";
echo "Year (Two Digits) : " . date("y") . "<br>";
echo "Day of the Week : " . date("l") . "<br>";
echo "Date : " . date("d-m-Y") . "<br>";
echo "<hr>";
#Time
echo "Hour (00 - 23) : " . date("H") . "<br>";
echo "Hour (01 - 12) : " . date("h") . "<br>";
echo "Minutes (00 - 59) : " . date("i") . "<br>";
echo "Seconds (00 - 59) : " . date("s") . "<br>";
echo "Lowercase Ante meridiem and Post meridiem (am - pm) : " . date("a") . "<br>";
echo "Uppercase Ante meridiem and Post meridiem (AM - PM) : " . date("A") . "<br>";
echo "Time : " . date("H:i:s") . "<br>";
echo "Time : " . date("h:i:s:A") . "<br>";
?>