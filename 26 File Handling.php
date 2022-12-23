<!-- PHP File Handling -->
<title>PHP File Handling</title>

<?php
#
readfile("PHP Testing/Notes.txt");
echo "<hr>";
#
echo readfile("PHP Testing/Notes.txt");
echo "<hr>";
#
$returnCharacterCount = readfile("PHP Testing/Notes.txt");
echo "<br><br>";
echo $returnCharacterCount;
echo "<hr>";
?>