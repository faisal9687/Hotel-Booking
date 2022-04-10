<!DOCTYPE html>
<html>

<head>
	<title>feadbackMessage</title>
	<link rel="stylesheet" href="css/feadbackMessageStyle.css">
	<link rel="icon" type="image/x-icon" href="icon/icon3.png">
</head>


<body>

		<?php

require 'database/dbr.php';
		
		
		$name = $_POST['name'];
		$phone = $_POST['phone'];
        $email = $_POST['email'];
		$subject = $_POST['subject'];
		$type = $_POST['type'];
        $message = $_POST['message'];
		
		
		
		
		$sql = "INSERT INTO feadback (id, Name, Phone, Email, Subject, Type, Message, CreationDateTime) 
		VALUES ( id,'$name', '$phone','$email','$subject','$type','$message',CURRENT_TIMESTAMP)";

		if(mysqli_query($conn, $sql)){
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		
		mysqli_close($conn);
		?>

			<?php
			echo "<h1>Feadback Message</h1>";
			?>
			<hr>
		<?php
			echo "<p>$name</p>";
			echo "<p>$phone</p>";
			echo "<p>$email</p>";
			echo "<p>$subject</p>";
			echo "<p>$type</p>";
			echo "<p>$message</p>";
			
		?>
<hr>
			<button  onclick="history.back()">Back Home</button>
</body>

</html>
