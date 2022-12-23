<!-- PHP Create a MySQL Database -->
<title>PHP Create a MySQL Database</title>





<?php
# = = = = = MySQLi Object-oriented = = = = = 
$serverName = "localhost";
$userName = "root";
$password = "";
// Create connection
$conn = new mysqli($serverName, $userName, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Create database
$sql = "CREATE DATABASE doctor";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
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
// Create connection
$conn = mysqli_connect($serverName, $userName, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Create database
$sql = "CREATE DATABASE engineer";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn);
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
try {
    $conn = new PDO("mysql:host=$serverName", $userName, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE lawyer";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
// Close Connection
$conn = null;
?>
<hr>