<?php
include 'logindb.php';

//get data from form

$sql = "TRUNCATE TABLE `$tablename`";

if ($conn->query($sql) === TRUE) {
    echo "All Data removed
    <br><a href='index.html'>Go back to form</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>