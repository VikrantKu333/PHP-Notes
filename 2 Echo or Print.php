<!-- PHP Echo or Print -->
<title>PHP Echo or Print</title>

<!-- The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print. -->

<!-- Echo -->
<?php
// The echo statement can be used with or without parentheses: echo or echo()
echo "<h3>PHP Echo</h3>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?>

<!-- Print -->
<?php
// The print statement can be used with or without parentheses: print or print()
print "<h3>PHP Print</h3>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?>