<?php
include 'logindb.php';

//get data from form
$first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
$second_name = mysqli_real_escape_string($conn, $_REQUEST['second_name']);
$gender_first_form = mysqli_real_escape_string($conn, $_REQUEST['gender_first_form']);
$age_first_form = mysqli_real_escape_string($conn, $_REQUEST['age_first_form']);
$gender_second_form = mysqli_real_escape_string($conn, $_REQUEST['gender_second_form']);
$birthday_date = mysqli_real_escape_string($conn, $_REQUEST['birthday_date']);
$marital_status = mysqli_real_escape_string($conn, $_REQUEST['marital_status']);
$social_status = mysqli_real_escape_string($conn, $_REQUEST['social_status']);
$inhabitation = mysqli_real_escape_string($conn, $_REQUEST['inhabitation']);
$free_time_checkbox_sleep = mysqli_real_escape_string($conn, $_REQUEST['free_time_checkbox_sleep']);
$free_time_checkbox_walk = mysqli_real_escape_string($conn, $_REQUEST['free_time_checkbox_walk']);
$free_time_checkbox_fish = mysqli_real_escape_string($conn, $_REQUEST['free_time_checkbox_fish']);
$free_time_checkbox_game = mysqli_real_escape_string($conn, $_REQUEST['free_time_checkbox_game']);
$first_select_input = mysqli_real_escape_string($conn, $_REQUEST['first_select_input']);
$quantity_of_books = mysqli_real_escape_string($conn, $_REQUEST['quantity_of_books']);
$comments = mysqli_real_escape_string($conn, $_REQUEST['comments']);
$sized_select_name = mysqli_real_escape_string($conn, $_REQUEST['sized_select_name']);
$text_with_placeholder = mysqli_real_escape_string($conn, $_REQUEST['text_with_placeholder']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$spam_equipment = mysqli_real_escape_string($conn, $_REQUEST['spam_equipment']);
$spam_dinner = mysqli_real_escape_string($conn, $_REQUEST['spam_dinner']);
$spam_million = mysqli_real_escape_string($conn, $_REQUEST['spam_million']);
$radio_difficult = mysqli_real_escape_string($conn, $_REQUEST['radio_difficult']);


$sql = "INSERT INTO $tablename (`first_name`, `second_name`, `gender_first_form`, `age_first_form`, `gender_second_form`, 
`birthday_date`, `marital_status`, `social_status`, `inhabitation`, `free_time_checkbox_sleep`, `free_time_checkbox_walk`, 
`free_time_checkbox_fish`, `free_time_checkbox_game`, `first_select_input`, `quantity_of_books`, `comments`, `sized_select_name`, 
`text_with_placeholder`, `email`, `spam_equipment`, `spam_dinner`, `spam_million`, `radio_difficult`)
VALUES ('$first_name', '$second_name', '$gender_first_form', '$age_first_form', '$gender_second_form', '$birthday_date', 
'$marital_status', '$social_status', '$inhabitation', '$free_time_checkbox_sleep', '$free_time_checkbox_walk', 
'$free_time_checkbox_fish', '$free_time_checkbox_game', '$first_select_input', '$quantity_of_books', '$comments', 
'$sized_select_name', '$text_with_placeholder', '$email', '$spam_equipment', '$spam_dinner', '$spam_million', '$radio_difficult')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>