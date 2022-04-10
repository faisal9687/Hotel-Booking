<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script type="text/javascript" src="js/feadbackScript.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<link rel="stylesheet" type="text/css" href="css/loginStyle.css">
<link rel="icon" type="image/x-icon" href="icon/icon3.png">
</head>


<style>
  

</style>

<body>

        <div class="header">
        <h1>Login Page</h1>
        <p>Welcome to login page</p>
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
  <form method="POST" name='login' onSubmit="return formValidation();">


    <label for="username">Username</label>
    <input type="text" id="username" required name="username" autocomplete="off" placeholder="Enter your username....">


    <label for="password">Password</label>
    <input type="password" id="password" required name="password" autocomplete="off" placeholder="Enter your password....">

    <input type="checkbox" onclick="myFunction()"><label for="Spassword">Show Pssword</label><br>
    <script src="js/loginScript.js"></script>
    <input style = "justify-items: center;" type="checkbox"  name="remember"><label for="Spassword"> Remember me </label><br>

  


    <input type="submit" name ="login" value="login">
    <input type="reset" value="Clear input data"><br>

    <a style ="font-weight:bold; justify-items: right; " href="register.php">sign up</a><br>
    
    
    <p><?php require 'loginCheck.php';?></p>
  </form>

  

</div>
</div>

<div class="footer">
          <h4> Hotel Information System</h4>
          <img src="icon/icon3.png" style="width: 50px; height: 50px; justify-items: right;"/>
      </div>

</body>
</html>


