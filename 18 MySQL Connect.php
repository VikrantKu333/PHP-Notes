<!-- PHP Connect to MySQL -->
<title>PHP Connect to MySQL</title>

<!-- There are two types of methods in PHP to connect MySQL database through backend
1. MySQLi extension (the 'i' stands for improved)
2. PDO (PHD Data Objects) -->





<?php
# = = = = = MySQLi Object-Oriented = = = = = 
$serverName = "localhost";
$userName = "root";
$password = "";
// Create Connection
$conn = new mysqli($serverName, $userName, $password);
// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";
// Close Connection
#The connection will be closed automatically when the script ends. To close the connection before, use the following : -
$conn->close();
?>
<hr>





<?php
# = = = = = MySQLi Procedural = = = = = 
$serverName = "localhost";
$userName = "root";
$password = "";
// Create Connection
$conn = mysqli_connect($serverName, $userName, $password);
// Check Connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";
// Close Connection
#The connection will be closed automatically when the script ends. To close the connection before, use the following : -
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
    echo "Connected successfully<br>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
// Close Connection
#The connection will be closed automatically when the script ends. To close the connection before, use the following : -
$conn = null;
?>
<hr>