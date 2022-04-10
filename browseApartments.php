<!DOCTYPE html>
<html>
<head>
<title>Users in the database</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script type="text/javascript" src="js/script.js"></script>
<link rel="stylesheet" type="text/css" href="css/browseApartmentStyle.css">
<link rel="icon" type="image/x-icon" href="icon/icon3.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>


<body>

<div class="header">
            <h1>Apartments Table</h1>
            <p>Welcome to the apartment table</p>
            <img src="icon/icon3.png" style="width: 60px; height: 60px; justify-items: flex-end;"/>
            <h5 id="clock" style="  justify-items: flex-start; text-align: center;  "></h5>
          </div>
          
          <div class="topnav">
        <a class="active" href="home.php"><i class="fa fa-home"></i> Home</a>
        <a href="apartmentRecording.php"><i class='far fa-building' ></i> Apartment Recording</a>
        <a href="browseApartments.php"> <i class="fa fa-search"></i> Browse Apartments</a>
        <a href="feadback.php"><i class='far fa-comment-alt' ></i>  Feedback</a>
        <a href="browseUsers.php"><i class="fa fa-fw fa-user"></i> Browse Users</a>
        <a href="login.php"><i class="fa fa-sign-out" style="font-size:16px"></i> Log out </a>
         

        
      </div>
<hr>

<table id="apartments">
    <tr>
        <th>id</th>
        <th>Apartment_Number</th>
        <th>Floor_Number</th>
        <th>Number_Of_Rooms</th>
        <th>Occupied</th>
        <th>Price</th>
        <th>Payment</th>
        <th>Rent_Start_Date</th>
        <th>Rent_End_Date</th>
        <th>Renter_ID</th>
        <th>Renter_Name</th>
    </tr>


<?php
$dbServername = "localhost";
$dbUsername = "admin";
$dbPassword = "rJcmnyDtTflqi9B1";
$dbname = "hotelInformationSystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

$sql = "SELECT * FROM apartments";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
    echo "<tr>";

    echo "<td>" . $row['id'] . "</td>";
  
    echo "<td>" . $row['Apartment_Number'] . "</td>";
  
    echo "<td>" . $row['Floor_Number'] . "</td>";
  
    echo "<td>" . $row['Number_Of_Rooms'] . "</td>";
  
    echo "<td>" . $row['Occupied'] . "</td>";
  
    echo "<td>" . $row['Price'] . "</td>";
  
    echo "<td>" . $row['Payment'] . "</td>";
  
    echo "<td>" . $row['Rent_Start_Date'] . "</td>";

    echo "<td>" . $row['Rent_End_Date'] . "</td>";
  
    echo "<td>" . $row['Renter_ID'] . "</td>";
  
    echo "<td>" . $row['Renter_Name'] . "</td>";
  
    echo "</tr>";
  
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

<div class="footer">
          <h4> Hotel Information System</h4>
          <img src="icon/icon3.png" style="width: 50px; height: 50px; justify-items: right;"/>
      </div>

</body>
</html>
