<?php
$servername = "localhost";
$username = "admin";
$password = "rJcmnyDtTflqi9B1";
$dbname = "HotelInformationSystem";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE Feadback (
id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name varchar(50) NOT NULL,
Phone varchar(50) NOT NULL,
Email varchar(50) NOT NULL,
Subject varchar(50) NOT NULL,
Type varchar(50) NOT NULL,
Message varchar(255) NOT NULL,
CreationDateTime TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  echo "Table Feadback created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>