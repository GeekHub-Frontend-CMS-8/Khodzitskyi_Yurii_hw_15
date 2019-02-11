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
$first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
$second_name = mysqli_real_escape_string($conn, $_REQUEST['second_name']);
$gender_first_form = mysqli_real_escape_string($conn, $_REQUEST['gender_first_form']);
$age_first_form = mysqli_real_escape_string($conn, $_REQUEST['age_first_form']);


$sql = "INSERT INTO test_table_for_form (`first_name`, `second_name`, `gender_first_form`, `age_first_form`)
VALUES ('$first_name', '$second_name', '$gender_first_form', '$age_first_form')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>