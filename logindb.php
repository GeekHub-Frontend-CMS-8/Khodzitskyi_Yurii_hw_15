<?php
$servername = "localhost";
$username = "root";
$password = "1";
$dbname = "hw_15_db";
$tablename = "table_for_form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
};
?>