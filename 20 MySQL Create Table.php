<!-- PHP MySQL Create Table -->
<title>PHP MySQL Create Table</title>





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
// sql to create table
$sql = "CREATE TABLE employee (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    registration_date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if ($conn->query($sql) === TRUE) {
    echo "Table employee created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
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
// sql to create table
$sql = "CREATE TABLE employee (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    registration_date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if (mysqli_query($conn, $sql)) {
    echo "Table employee created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
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

    // sql to create table
    $sql = "CREATE TABLE employee (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        registration_date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table employee created successfully<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
// Close Connection
$conn = null;
?>
<hr>