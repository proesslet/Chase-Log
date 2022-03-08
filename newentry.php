<?php
    require("includes/db_connect.inc.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $date = $_POST['date'];
        $city = $_POST['city'];
        $stateName = $_POST['state'];
        $county = $_POST['county'];
        $chaseDescription = $_POST['description'];

        $sql = "INSERT INTO chaseentries (chaseDate, City, stateName, County, chaseDescription) VALUES ('$date', '$city', '$stateName', '$county', '$chaseDescription')";

        if (mysqli_query($db, $sql)) {
            // echo "Entry saved";
        } else {
            // echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
        mysqli_close($db);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storm Chase Log | New Entry</title>
    <?php include 'includes/setup.inc.php'; ?>
</head>
<body>
    <h1 class="title">New Entry Form</h1>
    <div class="go-home">
        <a class="go-home-link" href="index.php">Go Home</a>
    </div>
    <form class="entry-form" action="<?=$_SERVER["PHP_SELF"]?>" method="post">
        <label for="date">Date:</label>
        <input type="date" class="entry-text-input" id="date" name="date">
        <label for="city">Enter the City:</label>
        <input type="text" class="entry-text-input" id="city" name="city" placeholder="City" required>
        <label for="state">Enter the State:</label>
        <input type="text" class="entry-text-input" id="state" name="state" placeholder="State" required>
        <label for="county">Enter the County:</label>
        <input type="text" class="entry-text-input" id="county" name="county" placeholder="County">
        <label for="Description">Description:</label>
        <textarea id="description" name="description" rows="10" cols="50" placeholder="Enter a description"></textarea>
        <input type="submit" value="Submit" class="submit">
    </form>
    
</body>
</html>