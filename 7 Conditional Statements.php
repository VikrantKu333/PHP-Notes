<!-- PHP Conditional Statements -->
<title>PHP Conditional Statements</title>

<?php
$age = 15;

#if Statement
if ($age < "18") {
    echo "<hr> You are Child!";
}

#if...else Statement
if ($age < "18") {
    echo "<hr> You are Child!";
} else {
    echo "<hr> You are Young Adults!";
}

#if...elseif...else Statement
if ($age < "18") {
    echo "<hr> You are Child!";
} elseif ($age < "45") {
    echo "<hr> You are Young Adults!";
} else {
    echo "<hr> You are Old Adults!";
}

echo "<hr>";
?>