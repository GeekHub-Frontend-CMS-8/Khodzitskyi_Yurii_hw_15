


<?php
include 'logindb.php';
$sql = "SELECT first_name, second_name, gender_first_form, age_first_form, gender_second_form, birthday_date, marital_status,
social_status, inhabitation, free_time_checkbox_sleep, free_time_checkbox_walk, free_time_checkbox_fish, free_time_checkbox_game, 
first_select_input, quantity_of_books, comments, sized_select_name, text_with_placeholder, email, spam_equipment, spam_dinner, 
spam_million, radio_difficult FROM $tablename";
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
        <th>
            first_name
        </th>
        <th>
            second_name
        </th>
        <th>
            gender_first_form
        </th>
        <th>
            age_first_form
        </th>
        <th>
            gender_second_form
        </th>
        <th>
            birthday_date
        </th>
        <th>
            marital_status
        </th>
        <th>
            social_status
        </th>
        <th>
            inhabitation
        </th>
        <th>
            free_time_checkbox_sleep
        </th>
        <th>
            free_time_checkbox_walk
        </th>
        <th>
            free_time_checkbox_fish
        </th>
        <th>
            free_time_checkbox_game
        </th>
        <th>
            first_select_input
        </th>
        <th>
            quantity_of_books
        </th>
        <th>
            comments
        </th>
        <th>
            sized_select_name
        </th>
        <th>
            text_with_placeholder
        </th>
        <th>
            email
        </th>
        <th>
            spam_equipment
        </th>
        <th>
            spam_dinner
        </th>
        <th>
            spam_million
        </th>
        <th>
            radio_difficult
        </th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>
            <td>" . $row["first_name"] . "</td>
            <td>" . $row["second_name"] . "</td>
            <td>" . $row["gender_first_form"] . "</td>
            <td>" . $row["age_first_form"] . "</td>
            <td>" . $row["gender_second_form"] . "</td>
            <td>" . $row["birthday_date"] . "</td>
            <td>" . $row["marital_status"] . "</td>
            <td>" . $row["social_status"] . "</td>
            <td>" . $row["inhabitation"] . "</td>
            <td>" . $row["free_time_checkbox_sleep"] . "</td>
            <td>" . $row["free_time_checkbox_walk"] . "</td>
            <td>" . $row["free_time_checkbox_fish"] . "</td>
            <td>" . $row["free_time_checkbox_game"] . "</td>
            <td>" . $row["first_select_input"] . "</td>
            <td>" . $row["quantity_of_books"] . "</td>
            <td>" . $row["comments"] . "</td>
            <td>" . $row["sized_select_name"] . "</td>
            <td>" . $row["text_with_placeholder"] . "</td>
            <td>" . $row["email"] . "</td>
            <td>" . $row["spam_equipment"] . "</td>
            <td>" . $row["spam_dinner"] . "</td>
            <td>" . $row["spam_million"] . "</td>
            <td>" . $row["radio_difficult"] . "</td>
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
