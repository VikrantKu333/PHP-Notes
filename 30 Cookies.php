<!-- PHP Cookies -->

<?php
/*
A cookie is created with the setcookie() function.
Syntax
    setcookie(name, value, expire, path, domain, secure, httponly);
Only the name parameter is required. All other parameters are optional.
*/
$cookie_name = "favorite_language";
$cookie_value = "Python";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<!-- Note: The setcookie() function must appear BEFORE the <html> tag. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Set Cookies</title>
    <style>
        header {
            padding: 10px;
            background-color: gray;
        }

        section {
            padding: 10px;
            background-color: silver;
            margin: 5px auto;
        }
    </style>
</head>

<body>
    <header>
        <h2>Set Cookies</h2>
    </header>
    <section>
        <?php
        #Check if Cookies are Set or Not Set
        echo "<h3>Check if Cookies are Set or Not Set</h3>";
        if (!isset($_COOKIE[$cookie_name])) {
            echo "Cookie Named '" . $cookie_name . "' is not set!";
        } else {
            echo "<b>Cookies is set</b><hr>";
            echo "Cookies Name : " . $cookie_name . "<br>";
            echo "Cookies Value : " . $_COOKIE[$cookie_name];
        }
        ?>
    </section>
    <hr>
    <section>
        <?php
        #Check if Cookies are Enabled or Disabled
        echo "<h3>Check if Cookies are Enabled or Disabled</h3>";
        if (count($_COOKIE) > 0) {
            echo "Cookies are Enabled.";
        } else {
            echo "Cookies are Disabled.";
        }
        ?>
    </section>
</body>

</html>