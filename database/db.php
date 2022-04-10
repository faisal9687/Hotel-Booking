<?php

$dbServername = "localhost";
$dbUsername = "admin";
$dbPassword = "rJcmnyDtTflqi9B1";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>