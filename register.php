<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script type="text/javascript" src="js/regsiterScript.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<link rel="stylesheet" type="text/css" href="css/registerStyle.css">
<link rel="icon" type="image/x-icon" href="icon/icon3.png">
</head>

<body>

        <div class="header">
        <h1>Register Page</h1>
        <p>Welcome to register page</p>
        <img src="icon/icon3.png" style="width: 60px; height: 60px; justify-items: flex-end;"/>
        <h5 id="clock" style="  justify-items: flex-start; text-align: center;  "></h5>
      </div>
      
      <div class="topnav">
        <a class="active" href="index.php"><i class="fa fa-home"></i> Home</a>
        <a href="register.php"> <i class="fa fa-fw fa-user"></i> Register</a>
        <a href="login.php"> <i class="fa fa-fw fa-user"></i> Login</a>
        <a href="aboutMe.html"target="_blank"><i class='fas fa-user-graduate'></i>  About Onwer</a>
      </div>



<div class="container">
  <form method="POST"  name='register' onSubmit="return formValidation();">


  <div class="required">
    <label for="natID">National ID</label>
    <input type="number" id="natID" required  name="natID" autocomplete="off" placeholder="Your national ID..">
</div>

  <div class="required">
    <label for="fname">First Name</label>
    <input type="text"  id="fname" required  name="fname" autocomplete="off" placeholder="Your first name..">
</div>

<div class="required">
    <label for="lname">Last Name</label>
    <input type="text"  id="lname" required name="lname" autocomplete="off" placeholder="Your last name..">
</div>


<div class="required">
    <label for="email">Email</label>
    <input type="text" id="email" required name="email" autocomplete="off" placeholder="Your Email..">
    
</div>

<div class="required">
    <label for="username">Username</label>
    <input type="text" id="username" required name="username" autocomplete="off" placeholder="Enter your username....">
</div>

<div class="required">
    <label for="password">Password</label>
    <input type="password" id="password" required name="password" autocomplete="off" placeholder="Enter your password....">
</div>

<div class="required">
    <label for="Cpassword">Confirm Password</label>
    <input type="password" id="Cpassword" required name="Cpassword" autocomplete="off" placeholder="Enter your confirm password....">
</div>



    <input type="submit" name="signup" value="Register">
    <input type="reset" value="Clear input data">
    <a href = "login.php">Sign in</a>
  
    

  </form>
</div>
<script src="js/registerScript.js"></script>
</div>

<?php
require 'database/dbr.php';

$mssg = "";

if(isset($_POST['signup'])){

	$natID = $_POST['natID'];
		$fname = $_POST['fname'];
        $lname = $_POST['lname'];
		$email = $_POST['email'];
		$username = $_POST['username'];
        $password = $_POST['password'];
		
	
	
	$sql = "INSERT INTO users (id, National_ID, First_Name, Last_Name, Email, Username, Password, CreationDateTime) 
		VALUES ( id,'$natID', '$fname','$lname','$email','$username','$password',CURRENT_TIMESTAMP)";
	
	 
	if(mysqli_query($con, $sql)){
	echo $mssg = "<p>Account successfully created</p>";
	}
  else{
   echo $mssg= "<P>The account was not created. There was an error</p>";
  }
	
}
?>
  

<div class="footer">
          <h4> Hotel Information System</h4>
          <img src="icon/icon3.png" style="width: 50px; height: 50px; justify-items: right;"/>
      </div>

      

</body>
</html>


