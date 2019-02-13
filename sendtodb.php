<?php
include 'logindb.php';

//get data from form
$first_name = $_GET['first_name'];
$second_name = $_GET['second_name'];
$gender_first_form = $_GET['gender_first_form'];
$age_first_form = $_GET['age_first_form'];
$gender_second_form = $_GET['gender_second_form'];
$birthday_date = $_GET['birthday_date'];
$marital_status = $_GET['marital_status'];
$social_status = $_GET['social_status'];
$inhabitation = $_GET['inhabitation'];
$free_time_checkbox_sleep = $_GET['free_time_checkbox_sleep'];
$free_time_checkbox_walk = $_GET['free_time_checkbox_walk'];
$free_time_checkbox_fish = $_GET['free_time_checkbox_fish'];
$free_time_checkbox_game = $_GET['free_time_checkbox_game'];
$first_select_input = $_GET['first_select_input'];
$quantity_of_books = $_GET['quantity_of_books'];
$comments = $_GET['comments'];
$sized_select_name = $_GET['sized_select_name'];
$text_with_placeholder = $_GET['text_with_placeholder'];
$email = $_GET['email'];
$spam_equipment = $_GET['spam_equipment'];
$spam_dinner = $_GET['spam_dinner'];
$spam_million = $_GET['spam_million'];
$radio_difficult = $_GET['radio_difficult'];


$sql = "INSERT INTO $tablename (`first_name`, 
`second_name`, 
`gender_first_form`, 
`age_first_form`, 
`gender_second_form`, 
`birthday_date`, 
`marital_status`, 
`social_status`, 
`inhabitation`, 
`free_time_checkbox_sleep`, 
`free_time_checkbox_walk`, 
`free_time_checkbox_fish`, 
`free_time_checkbox_game`, 
`first_select_input`, 
`quantity_of_books`, 
`comments`, 
`sized_select_name`, 
`text_with_placeholder`, 
`email`, 
`spam_equipment`, 
`spam_dinner`, 
`spam_million`, 
`radio_difficult`)
VALUES ('$first_name', 
'$second_name', 
'$gender_first_form', 
'$age_first_form', 
'$gender_second_form', 
'$birthday_date', 
'$marital_status', 
'$social_status', 
'$inhabitation', 
'$free_time_checkbox_sleep', 
'$free_time_checkbox_walk', 
'$free_time_checkbox_fish', 
'$free_time_checkbox_game', 
'$first_select_input', 
'$quantity_of_books', 
'$comments', 
'$sized_select_name', 
'$text_with_placeholder', 
'$email', 
'$spam_equipment', 
'$spam_dinner', 
'$spam_million', 
'$radio_difficult')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<br><a href=\"getfromdb.php\">See table from DB</a><br>
    <a href=\"removealldatafromsql.php\">Remove all data from DB</a><br>
    <a href=\"index.html\">Go back to the form</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>