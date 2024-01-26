# Project-Management
Project-Management
Create file named: "database.php"
Insert into file:
<?php

$hostName = "";
$dbUser = "";
$dbPassword = "";
$dbName = "";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>