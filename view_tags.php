<?php

$sql = "SELECT * FROM tag_management ORDER BY tag_id DESC"; //id, tag_name
$result = $link->query($sql);


//set the table headers up
echo "<table id='tag_table'>";
echo "<tr>";
echo "<th>TAG ID</th>";
echo "<th>TAG NAME</th>";
echo "<th>DELETE</th>";
//echo "<th>Delete</th>";
echo "</tr>";

if ($result->num_rows > 0) { //if the number of rows in the array var $result is >0 then continue
    //output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["tag_id"] . "</td>";
        echo "<td>" . $row["tag_value"] . "</td>";
        //identify the row id and allow the user to click to delete
        echo "<td><a href='delete_tags.php?id=" . $row['tag_id'] . "'>DELETE</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else { //if the number of rows in the array var $result is <0 then print "This table is empty"
    echo "There are no tags in the database";
}


