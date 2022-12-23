<!-- PHP File Create/Write -->
<title>PHP File Create/Write</title>

<!-- PHP Create a File or Write a File. File pointer starts at the beginning of the file. -->
<?php
echo "Write a File & File pointer starts at the beginning of the file.<br>";
$filePointer = fopen("PHP Testing/Notes Write.txt", "w") or die("Unable To Open File !");
$writeTextNotes = "Vikrant Patel\n";
fwrite($filePointer, $writeTextNotes);
$writeTextNotes = "Niraj Sinha\n";
fwrite($filePointer, $writeTextNotes);
fclose($filePointer);
?>

<!-- PHP Create a File or Write a File. File pointer starts at the end of the file. -->
<?php
echo "Write a File & File pointer starts at the end of the file.<br>";
$filePointer = fopen("PHP Testing/Notes Write.txt", "a") or die("Unable To Open File !");
$writeTextNotes = "Rohit Raj\n";
fwrite($filePointer, $writeTextNotes);
$writeTextNotes = "Suraj Malhotra\n";
fwrite($filePointer, $writeTextNotes);
fclose($filePointer);
?>