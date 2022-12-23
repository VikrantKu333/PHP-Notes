<!-- PHP Form Handling -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
    <style>
        header {
            background-color: green;
            padding: 10px;
        }

        nav {
            background-color: yellowgreen;
            margin: 8px auto;
            padding: 10px;
        }

        section {
            padding: 10px;
            background-color: whitesmoke;
        }

        form {
            text-align: center;
        }

        input {
            display: block;
            margin: 5px auto;
        }
    </style>
</head>

<body>
    <header>Form Handling</header>
    <nav>
        <?php
        echo $_SERVER["PHP_SELF"], "<br>";
        echo htmlspecialchars($_SERVER["PHP_SELF"]);
        ?>
    </nav>
    <section>
        <!-- POST Method -->
        <form action="16 Form Handling.php" method="post">
            <b>POST Method</b>
            <input type="text" name="userName" placeholder="Full Name">
            <input type="email" name="emailID" placeholder="Email ID">
            <input type="password" name="userPassword" placeholder="Password">
            <input type="submit" value="Print">
        </form>
        <!-- PHP POST Method -->
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "<b>Name : </b>", $_POST["userName"], "<br>";
            echo "<b>Email ID : </b>", $_POST["emailID"], "<br>";
            echo "<b>Password : </b>", $_POST["userPassword"], "<br>";
        }
        ?>
        <hr>
        <!-- GET Method -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
            <b>GET Method</b>
            <input type="text" name="userName" placeholder="Full Name">
            <input type="email" name="emailID" placeholder="Email ID">
            <input type="password" name="userPassword" placeholder="Password">
            <input type="submit" value="Print">
        </form>
        <!-- PHP GET Method -->
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            echo "<b>Name : </b>", $_GET["userName"], "<br>";
            echo "<b>Email ID : </b>", $_GET["emailID"], "<br>";
            echo "<b>Password : </b>", $_GET["userPassword"], "<br>";
        }
        ?>
    </section>
</body>

</html>