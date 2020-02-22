<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Tag Management</title>
    <link href="styles.css" media="screen" rel="stylesheet" type="text/css"/>
</head>
<body>

<?php
//sql query to retrieve tag_id and tag_name from the SQL database
$sql = "SELECT * FROM tag_management ORDER BY tag_id DESC";

//store the result of the query in a variable
$result = $link->query($sql);

//set the table headers up
echo "<table id='tag_table'>";
echo "<tr>";
echo "<th>TAG ID</th>";
echo "<th>TAG NAME</th>";
echo "<th>CATEGORY</th>";
echo "<th>EDIT</th>";
echo "<th>DELETE</th>";
echo "</tr>";

if ($result->num_rows > 0) { //if the number of rows in the array var $result is >0 then continue
    //output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["tag_id"] . "</td>";
        echo "<td>" . $row["tag_value"] . "</td>";
        //view the assigned category -- still needs work
        echo "<td>Category</td>";
        //edit a row value -- still needs work
        echo "<td>EDIT</td>";
        //identify the row id and allow the user to click to delete
        echo "<td><a href='delete_tags.php?id=" . $row['tag_id'] . "'>DELETE</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else { //if the number of rows in the array var $result is <0 then print "This table is empty"
    echo "<div id='empty_db_message'> There are no tags in the database </div>";
}

?>

</body>
</html>