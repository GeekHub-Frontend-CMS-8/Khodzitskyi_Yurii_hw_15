<?php
include 'logindb.php';

//get data from form

$sql = "TRUNCATE TABLE `$tablename`";

if ($conn->query($sql) === TRUE) {
    echo "All Data removed";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>