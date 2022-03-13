<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chase Log | View Entries</title>
    <?php include 'includes/setup.inc.php'; ?>
</head>
<body>
    <h1 class="title">This feature is in progress.</h1>
    <div class="go-home">
        <a class="go-home-link" href="index.php">Go home</a>
    </div>
    <?php
        require("includes/db_connect.inc.php");
        $sql = "SELECT chaseDate, City, stateName, County, chaseDescription FROM chaseentries";
        $result = $db->query($sql);

        if ($result-> num_rows > 0) {
            echo "<div class='table-section'>";
            echo "<table class='entry-table'>";
            echo "<tr>";
            echo "<th>Date</th>";
            echo "<th>City</th>";
            echo "<th>State</th>";
            echo "<th>County</th>";
            echo "<th>Description</th>";
            echo "</tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td class='date-column'>".$row["chaseDate"]."</td>";
                echo "<td class='city-column'>".$row["City"]."</td>";
                echo "<td class='state-column'>".$row["stateName"]."</td>";
                echo "<td class='county-column'>".$row["County"]."</td>";
                echo "<td class='description-column'>".$row["chaseDescription"]."</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</div>";
        } else {
            echo "No results";
        }
        $db->close();
    ?>
</body>
</html>