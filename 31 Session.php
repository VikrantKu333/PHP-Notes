<!-- PHP Session -->

<?php
#Start the session
session_start();
?>

<!-- Note: The session_start() function must be the very first thing in your document. Before any HTML tags. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Session</title>
    <style>
        header {
            padding: 10px;
            background-color: lightcoral;
        }

        section {
            padding: 10px;
            margin: 5px auto;
            background-color: lightgray;
        }
    </style>
</head>

<body>
    <header>
        <h2>PHP Session</h2>
    </header>
    <section>
        <?php
        // Set session variables
        $_SESSION["favoriteColor"] = "Blue";
        $_SESSION["favoriteFruit"] = "Banana";
        $_SESSION["favoriteAnimal"] = "Rabbit";
        echo "Session variables are set.";
        ?>
    </section>
    <section>
        <?php
        // Show session variables that were set on page
        echo "Favorite Color is " . $_SESSION["favoriteColor"] . ".<br>";
        echo "Favorite Fruit is " . $_SESSION["favoriteFruit"] . ".<br>";
        echo "Favorite Animal is " . $_SESSION["favoriteAnimal"] . ".";
        ?>
    </section>
    <section>
        <?php
        // Show all session variables
        print_r($_SESSION);
        ?>
    </section>
    <section>
        <?php
        // To change a session variable, just overwrite it
        $_SESSION["favoriteColor"] = "Yellow";
        print_r($_SESSION);
        ?>
    </section>
    <section>
        <?php
        // Remove any specific session variables
        unset($_SESSION["favoriteColor"]);
        print_r($_SESSION);
        echo "<hr>";

        // Remove all session variables
        session_unset();
        print_r($_SESSION);
        echo "<hr>";

        // Destroy the session
        session_destroy();
        print_r($_SESSION);
        ?>
    </section>
</body>

</html>