<!-- PHP Filters -->

<!-- Validating data = Determine if the data is in proper form. -->
<!-- Sanitizing data = Remove any illegal character from the data. -->

<!-- Validating and Sanitizing Data with Filters -->
<!-- filter_var(variable, filter, options) -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Filters</title>
    <style>
        section {
            margin: 10px;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 6px black;
        }

        table,
        th,
        td {
            border: 1px solid teal;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
        }
    </style>
</head>

<body>
    <section>
        <h2>Filter List</h2>
        <table>
            <tr>
                <th>Index</th>
                <th>Filter Name</th>
                <th>Filter ID</th>
            </tr>
            <?php
            #PHP Filter List
            foreach (filter_list() as $key => $value) {
                echo '<tr><td>' . $key . '</td><td>' . $value . '</td><td>' . filter_id($value) . '</td></tr>';
            }
            ?>
        </table>
    </section>

    <section>
        <h3>Sanitize A Email</h3>
        <?php
        $email = " i n f o @ s u / r a j . c o m ";
        echo "$email <br>";
        $newEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $newEmail;
        ?>

        <hr>

        <h3>Sanitize A URL</h3>
        <?php
        $url = "https :/ /vik ra nt.com";
        echo "$url <br>";
        $new_url = filter_var($url, FILTER_SANITIZE_URL);
        echo $new_url;
        ?>
    </section>

    <section>
        <h3>Validate An Integer</h3>
        <?php
        $int = 69;
        echo var_dump($int) . "<br>";
        echo var_dump(filter_var($int, FILTER_VALIDATE_INT)) . "<br>";
        if (filter_var($int, FILTER_VALIDATE_INT)) {
            echo $int . " : is Integer";
        } else {
            echo $int . " : is not Integer";
        }
        ?>

        <hr>

        <h3>Validate An Integer Within A Range</h3>
        <?php
        $int = 45;
        $min = 11;
        $max = 99;
        var_dump(filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))));
        echo "<br>";
        if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max)))) {
            echo "The <b>$int</b> is within the range of $min to $max";
        } else {
            echo "The <b>$int</b> is not within the range of $min to $max";
        }
        ?>
    </section>

    <section>
        <h3>Validate An Float</h3>
        <?php
        $var = 6.9;
        echo var_dump($var) . "<br>";
        echo var_dump(filter_var($var, FILTER_VALIDATE_FLOAT)) . "<br>";
        if (filter_var($var, FILTER_VALIDATE_FLOAT)) {
            echo $var . " : is Float";
        } else {
            echo $var . " : is not Float";
        }
        ?>

        <hr>

        <h3>Validate An Float Within A Range</h3>
        <?php
        $var = 4.5;
        $min = 3;
        $max = 9;
        var_dump(filter_var($var, FILTER_VALIDATE_FLOAT, array("options" => array("min_range" => $min, "max_range" => $max))));
        echo "<br>";
        if (filter_var($var, FILTER_VALIDATE_FLOAT, array("options" => array("min_range" => $min, "max_range" => $max)))) {
            echo "The <b>$var</b> is within the range of $min to $max";
        } else {
            echo "The <b>$var</b> is not within the range of $min to $max";
        }
        ?>
    </section>

    <section>
        <h3>Validate An Email Address</h3>
        <?php
        $email = "info@vikrant.com";
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "$email : is a valid email address";
        } else {
            echo "$email : is not a valid email address";
        }
        ?>
    </section>

    <section>
        <h3>Validate A URL</h3>
        <?php
        $url = "https://suraj.com";
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            echo "$url : is a valid URL";
        } else {
            echo "$url : is not a valid URL";
        }
        ?>

        <hr>

        <h3>Validate A URL - Must Contain QueryString</h3>
        <?php
        $url = "https://suraj.com?search=Software";
        if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)) {
            echo "$url : is a valid URL with a query String";
        } else {
            echo "$url : is not a valid URL with a query String";
        }
        ?>
    </section>

    <section>
        <h3>Validate A Domain</h3>
        <?php
        $domain = "suraj";
        if (filter_var($domain, FILTER_VALIDATE_DOMAIN, FILTER_FLAG_HOSTNAME)) {
            echo "$domain : is a valid Domain";
        } else {
            echo "$domain : is not a valid Domain";
        }
        ?>
    </section>

    <section>
        <h3>Validate An IP Address</h3>
        <?php
        $ip = "127.0.0.1";
        // $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
        if (filter_var($ip, FILTER_VALIDATE_IP)) {
            echo "$ip : is a valid IP address";
        } else {
            echo "$ip : is not a valid IP address";
        }
        ?>

        <hr>

        <h3>Validate An IPv4 Address</h3>
        <?php
        // $ip = "127.0.0.1";
        $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
        if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
            echo "$ip : is a valid IPv4 address";
        } else {
            echo "$ip : is not a valid IPv4 address";
        }
        ?>

        <hr>

        <h3>Validate An IPv6 Address</h3>
        <?php
        $ip = "127.0.0.1";
        // $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
        if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
            echo "$ip : is a valid IPv6 address";
        } else {
            echo "$ip : is not a valid IPv6 address";
        }
        ?>
    </section>

    <section>
        <h3>Validate A MAC Address</h3>
        <?php
        $mac = "C8-D9-D2-AC-7E-26";
        if (filter_var($mac, FILTER_VALIDATE_MAC)) {
            echo "$mac : is a valid MAC Address";
        } else {
            echo "$mac : is not a valid MAC Address";
        }
        ?>
    </section>

</body>

</html>