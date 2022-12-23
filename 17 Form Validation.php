<!-- PHP Form Validation -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation Required</title>
    <style>
        header {
            background-color: teal;
            padding: 10px;
        }

        section {
            background-color: silver;
            padding: 10px;
            margin: 8px auto;
            text-align: center;
        }

        form {
            display: inline-block;
        }

        .form-group {
            text-align: left;
        }

        input {
            margin: 5px;
            padding: 10px;
            border-radius: 5px;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <!-- PHP Form Validation Required -->
    <?php
    // Define variables and set to empty values
    $fullNameError = $emailIDError = $cityError = "";
    $fullName = $emailID = $website = $city = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fullName"])) {
            $fullNameError = "Name is Required";
        } else {
            $fullName = $_POST["fullName"];
        }
        if (empty($_POST["emailID"])) {
            $emailIDError = "Email ID is Required";
        } else {
            $emailID = $_POST["emailID"];
        }
        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = $_POST["website"];
        }
        if (empty($_POST["city"])) {
            $cityError = "City is Required";
        } else {
            $city = $_POST["city"];
        }
    }
    ?>
    <header>Form Validation</header>
    <section>
        <!-- HTML Form -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <span class="error">* Required Field</span>
            <div class="form-group">
                <input type="text" name="fullName" placeholder="Full Name">
                <span class="error">* <?php echo $fullNameError; ?></span>
            </div>
            <div class="form-group">
                <input type="email" name="emailID" placeholder="Email ID">
                <span class="error">* <?php echo $emailIDError; ?></span>
            </div>
            <div class="form-group">
                <input type="url" name="website" placeholder="Website">
            </div>
            <div class="form-group">
                <input type="text" name="city" placeholder="City">
                <span class="error">* <?php echo $cityError; ?></span>
            </div>
            <input type="submit" value="Print">
        </form>
        <hr>
        <!-- PHP Print -->
        <?php
        echo "Name : " . $fullName . "<br>";
        echo "Email Id : " . $emailID . "<br>";
        echo "Website : " . $website . "<br>";
        echo "City : " . $city . "<br>";
        ?>
    </section>
</body>

</html>