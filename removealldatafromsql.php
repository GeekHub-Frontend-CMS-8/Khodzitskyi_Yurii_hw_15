<?php
$servername = "localhost";
$username = "root";
$password = "1";
$dbname = "hw_15_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//get data from form

$sql = "TRUNCATE TABLE `table_for_form`";

if ($conn->query($sql) === TRUE) {
    echo "All Data removed";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>