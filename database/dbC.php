<?php

$dbServername = "localhost";
$dbUsername = "admin";
$dbPassword = "rJcmnyDtTflqi9B1";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword,);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


// Create database
$sql = "CREATE DATABASE HotelInformationSystem";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);

?>