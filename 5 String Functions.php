<!-- PHP String Functions -->
<title>PHP String Functions</title>

<?php
$text = '   I Love My Country!   ';
echo strlen($text), " - $text<br>";
echo str_word_count($text), " - $text<br>";
echo strrev($text), " - $text<br>";
echo strpos($text, 'My'), " - $text<br>";
echo str_replace('Country', 'India', $text), " - $text<br>";
echo str_repeat($text, 3), " - $text<br>";
echo "<pre>";
echo rtrim($text), " - $text<br>";
echo ltrim($text), " - $text<br>";
echo "</pre>";
?>