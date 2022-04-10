<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script type="text/javascript" src="js/script.js"></script>
    <link rel="icon" type="image/x-icon" href="icon/icon3.png">
    <link rel="stylesheet" type="text/css" href="css/HomeStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Home</title>


</head>


<body>



    <div class="header">
        <h1>Hotel Information System</h1>
        <p>Welcome to home page in website</p>
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

      
      <div class="row">
        <div class="left" style="background-color:#bbb;">
        <p>Welcome <?php include ("welcomeuser.php")?></p> <hr>
          <h2><i class="fa fa-bars"></i>  Menu</i></h2>
         
          <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
          <ul id="myMenu">
          
            <li><a href="home.php"> Home</a></li>
            <li><a href="browseApartments.php"> Show all apartment</a></li>
            <li><a href="browseUsers.php"> Show All users</a></li>
            <li><a href="feadback.php"> Feedback</a></li>
            <li><a href="galleryPage.php" target="_blank"> Gallery</a></li>
            <li><a href="worldClock.html" target="_blank"> World Clocks</a></li>
            <li><a href="aboutHotel.html"target="_blank" > About Hotel</a></li>
            <li><a href="aboutMe.html"target="_blank" > About Onwer</a></li>
          </ul>
        </div>
        
        <div class="right" style="background-color:#ddd;"> 
        
          <h2>Hotel Information System</h2>
          <h3>Hotel Trailer</h3>  
            <video width="400" height="300" controls >
        <source src="video/video.mp4" type="video/mp4">
      </video>
      <hr>
      <p>Welcome to the royal hotel system</p>
          <p>Many services are provided on this site, including the registration of new rooms for hotel guests and also 
            suggestions and reactions by hotel visitors to improve the quality of service provided by us.</p> 
        </div>
      </div>
      
      
      
      
      <script src="js/script.js"></script>

      <div class="footer">
          <h4> Hotel Information System</h4>
          <img src="icon/icon3.png" style="width: 50px; height: 50px; justify-items: right;"/>
          
      </div>

      

</body>
</html>

