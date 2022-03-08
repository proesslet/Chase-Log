<?php
$servername = "localhost";
$u = "root";
$p = "";
$db_name = "chaselog";

$db = new mysqli($servername, $u, $p, $db_name);

if ($db->connect_error) {
    die("Connection failed: " + $db->connection_error);
}
// echo "Connected successfully";


