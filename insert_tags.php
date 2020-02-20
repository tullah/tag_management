<?php
if (isset($_POST['user_input'])) { //if the user inputs a value into the text box


    //then assign the input test to a variable and remove any whitespace from the ends
    $user_input = trim($_POST['user_input']);


    //this if statement block catches possible mistakes in the entering of data.
    if (is_null($user_input)) {
        echo '<script>alert("That was a null string, please enter proper data")</script>';
        exit;
    } elseif ($user_input == "") {
        echo '<script>alert("That was an empty string, please enter proper data")</script>';
        exit;
    }


    //insert user input into the database
    $sql = "INSERT INTO tag_management (tag_value) VALUES ('$user_input')";


    //use mysqli_query to execute sql string.
    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }

} //end if statement


