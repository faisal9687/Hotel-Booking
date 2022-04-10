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
$sql = "CREATE TABLE Apartments (
id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Apartment_Number varchar(255) NOT NULL,
Floor_Number varchar(255) NOT NULL,
Number_Of_Rooms varchar(255) NOT NULL,
Occupied varchar(255) NOT NULL,
Price varchar(255) NOT NULL,
Payment varchar(255) NOT NULL,
PaymentDateTime varchar(255) NOT NULL,
Rent_Start_Date varchar(255)NOT NULL,
Rent_End_Date varchar(255) NOT NULL,
Renter_ID varchar(255) NOT NULL ,
Renter_Name varchar(255) NOT NULL,
CreationDateTime TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  echo "Table Apartments created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>