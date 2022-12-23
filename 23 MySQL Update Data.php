<!-- PHP MySQL Update Data -->
<title>PHP MySQL Update Data</title>





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
// sql to update data
$sql = "UPDATE employee SET lastname='Developer' WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
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
// sql to update data
$sql = "UPDATE employee SET lastname='Designer' WHERE id=2";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
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
    // sql to update data
    $sql = "UPDATE employee SET lastname='Photographer' WHERE id=2";
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " Records UPDATED successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
// Close Connection
$conn = null;
?>
<hr>