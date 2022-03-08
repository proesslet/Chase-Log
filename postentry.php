<?php
require("includes/db_connect.inc.php");

$city = $_POST['city'];
$stateName = $_POST['state'];
$county = $_POST['county'];
$chaseDescription = $_POST['description'];

echo $city;

$sql = "INSERT INTO chaseentries (City, stateName, County, chaseDescription) VALUES ($city, $stateName, $county, $chaseDescription)";

if($db->query($sql) === TRUE) {
    echo "Entry saved";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$db->close();

?>