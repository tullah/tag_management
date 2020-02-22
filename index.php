<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Tag Management</title>
    <link href="styles.css" media="screen" rel="stylesheet" type="text/css"/>

    <!-- Javascript for the form confirmation -->
    <script type="text/javascript">
        //function to confirm submission
        function confSubmit(form) {
            //ask shafin for help on how to enter form data into javascript
            if (confirm("Are you sure you want to enter [data] into the database?")) {
                form.submit();
            } else {
                alert("You decided to not enter the data");
            }
        }
    </script>

</head>
<body>
<div class="wrapper">
    <div id="db_connect"><?php include "config.php" ?></div>

    <h1 id="title"><a href="index.php">Tag Management</a></h1>

    <!-- insert tags into the database table using POST form-->
    <form action="index.php" method="post">
        <!-- text input from user -->
        Input a Tag Value: <input type="text" name="user_input">
        <!-- drop-down input from user -->
        <select>
            <option value="Category_1">Category 1</option>}
            <option value="Category_2">Category 2</option>
            <option value="Category_3">Category 3</option>
        </select>

        <!-- for confSubmit() see the script at the top of the page -->
        <input type="button" onClick="confSubmit(this.form);" value="submit">
    </form>


    <!-- view the tags in a table format -- See view_tags.php code -->
    <div id="view_tags"><?php include "view_tags.php"; ?></div>

    <!-- insert tags into database table from input form -- see code insert_tags.php -->
    <?php include "insert_tags.php"; ?>

    <?php mysqli_close($link); //close the database link ?>

</div>


</body>
</html>
