<!DOCTYPE html>
<html>

<head>
	<title>apartment</title>
    <link rel="icon" type="image/x-icon" href="icon/icon3.png">
    <link rel="stylesheet" href="css/apartmentStyle.css">
</head>

<body>

		<?php

$dbServername = "localhost";
$dbUsername = "admin";
$dbPassword = "rJcmnyDtTflqi9B1";
$dbname = "hotelInformationSystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
		
		
		$apartmentNumber = $_POST['apartmentNumber'];
		$floorNumber = $_POST['floorNumber'];
        $NumberOfRooms = $_POST['NumberOfRooms'];
		$occupied = $_POST['occupied'];
		$price = $_POST['price'];
        $payment = $_POST['payment'];
        $PaymentDateTime = $_POST['PaymentDateTime'];
        $RentStartDate = $_POST['RentStartDate'];
        $RentEndDate = $_POST['RentEndDate'];
        $RenterNationalID = $_POST['RenterNationalID'];
        $RenterName = $_POST['RenterName'];
		
		
		
		$sql = "INSERT INTO apartments (id, Apartment_Number, Floor_Number, Number_Of_Rooms, Occupied, Price, Payment, PaymentDateTime ,Rent_Start_Date, Rent_End_Date, Renter_ID, Renter_Name, CreationDateTime) 
		VALUES ( id,'$apartmentNumber', '$floorNumber','$NumberOfRooms','$occupied','$price','$payment', '$PaymentDateTime',' $RentStartDate','$RentEndDate','$RenterNationalID','$RenterName',CURRENT_TIMESTAMP)";

		if(mysqli_query($conn, $sql)){
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		
		mysqli_close($conn);
		?>

			<?php
			echo "<h1>Apartment page</h1>";
			?>
			<hr>
		<?php
			echo "<p>$apartmentNumber</p>";
			echo "<p>$floorNumber</p>";
			echo "<p>$NumberOfRooms</p>";
			echo "<p>$occupied</p>";
			echo "<p>$price</p>";
			echo "<p>$payment</p>";
            echo "<p>$PaymentDateTime</p>";
			echo "<p>$RentStartDate</p>";
			echo "<p>$RentEndDate</p>";
			echo "<p>$RenterNationalID</p>";
			echo "<p>$RenterName</p>";
			
		?>
<hr>
			<button  onclick="history.back()">Back Home</button>
</body>

</html>
