<!-- PHP MySQL Insert Data -->
<title>PHP MySQL Insert Data</title>





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
// sql to insert data
$sql = "INSERT INTO employee (firstname, lastname, email) VALUES ('Niraj', 'Sinha', 'niraj@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
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
// sql to insert data
$sql = "INSERT INTO employee (firstname, lastname, email) VALUES ('Rohit', 'Raj', 'rohit@yahoo.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
    // sql to insert data
    $sql = "INSERT INTO employee (firstname, lastname, email) VALUES ('Suraj', 'Patel', 'suraj@hotmail.com')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
// Close Connection
$conn = null;
?>
<hr>