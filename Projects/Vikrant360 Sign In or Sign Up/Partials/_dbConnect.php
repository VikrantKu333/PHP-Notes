<!-- Database Connection -->

<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "users";
// Create connection
$conn = mysqli_connect($serverName, $userName, $password, $databaseName);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>