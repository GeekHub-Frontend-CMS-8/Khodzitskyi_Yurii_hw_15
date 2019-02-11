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



$sql = "SELECT first_name, second_name, age_first_form, gender_first_form FROM test_table_for_form";
$result = $conn->query($sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Document</title>
</head>
<body>
<table class="form_output_table">
    <tr>
        <th>first_name</th>
        <th>second_name</th>
        <th>age_first_form</th>
        <th>gender_first_form</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>
            <td>" . $row["first_name"] . "</td>
            <td>" . $row["second_name"] . "</td>
            <td>" . $row["age_first_form"] . "</td>
            <td>" . $row["gender_first_form"] . "</td>
         </tr>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</table>
</body>
</html>
