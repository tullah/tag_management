<?php

$id = $_GET['id']; //retrieve id from the row the user clicked -- see view_tags.php

include "config.php"; //open the database connection, see config.php code

$sql = "DELETE FROM tag_management WHERE tag_id = $id"; //sql query to identify row to delete

//mysqli_query used to execute sql query
if (mysqli_query($link, $sql)) { //if the link is successful and the query executes properly
    echo "Successfully deleted record"; //output message
    header('Location: index.php'); //reload the page
    exit;
} else { //if the fails or the query fails
    echo "Error deleting record"; //output message
}
