<!-- PHP MySQL Select Data -->
<title>PHP MySQL Select Data</title>





<?php
# = = = = = MySQLi Object-oriented = = = = = 
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "doctor";
// Create connection
$conn = new mysqli($serverName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// sql to select data
$sql = "SELECT id, firstname, lastname, email FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "ID : " . $row["id"] . " Name : " . $row["firstname"] . " " . $row["lastname"] . " Email ID : " . $row["email"] . "<br>";
    }
} else {
    echo "0 Results";
}
// Close Connection
$conn->close();
?>
<hr>





<?php
# = = = = = MySQLi Procedural = = = = = 
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "engineer";
// Create connection
$conn = mysqli_connect($serverName, $userName, $password, $databaseName);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// sql to select data
$sql = "SELECT id, firstname, lastname, email FROM employee";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID : " . $row["id"] . " Name : " . $row["firstname"] . " " . $row["lastname"] . " Email ID : " . $row["email"] . "<br>";
    }
} else {
    echo "0 Results";
}
// Close Connection
mysqli_close($conn);
?>
<hr>





<?php
# = = = = = PDO = = = = = 
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "lawyer";
try {
    $conn = new PDO("mysql:host=$serverName;dbname=$databaseName", $userName, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // sql to select data
    // $sql = "SELECT * FROM employee";
    $sql = "SELECT id, firstname, lastname, email FROM employee";
    // prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // foreach ($stmt->fetchAll() as $value) {
    //     echo implode(" ", $value) . '<br>';
    // }

    while ($row = $stmt->fetch()) {
        echo "ID : " . $row["id"] . " Name : " . $row["firstname"] . " " . $row["lastname"] . " Email ID : " . $row["email"] . "<br>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
// Close Connection
$conn = null;
?>
<hr>