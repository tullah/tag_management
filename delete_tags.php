<?php

$id = $_GET['id']; //retrieve id from the row the user clicked -- see view_tags.php

include "config.php";

$sql = "DELETE FROM tag_management WHERE tag_id = $id";

if (mysqli_query($link, $sql)) {
    echo "Successfully deleted record";
    header("index.php");
    exit;
} else {
    echo "Error deleting record";
}
