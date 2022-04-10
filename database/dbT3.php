<?php
$servername = "localhost";
$username = "admin";
$password = "rJcmnyDtTflqi9B1";
$dbname = "HotelInformationSystem";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "CREATE TABLE users (
id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
National_ID varchar(50) NOT NULL,
First_Name varchar(50) NOT NULL,
Last_Name varchar(50) NOT NULL,
Email varchar(50) NOT NULL,
Username varchar(50) NOT NULL,
Password varchar(50) NOT NULL,
CreationDateTime TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


if (mysqli_query($conn, $sql)) {
  echo "Table users created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>