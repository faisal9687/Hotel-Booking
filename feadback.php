<!DOCTYPE html>
<html>
<head>
    <title>Feadback</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script type="text/javascript" src="js/feadbackScript.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<link rel="stylesheet" type="text/css" href="css/feadbackStyle.css">
<link rel="icon" type="image/x-icon" href="icon/icon3.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

        <div class="header">
        <h1>Feadback Page</h1>
        <p>Welcome to feadback page</p>
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



<div class="container">
  <form method="POST" action="feadbackMessage.php" name='feadback' onSubmit="return formValidation();">

  <div class="required">
    <label for="name">Name</label><span id="errname"></span>
    <input type="text"  id="name" name="name"  placeholder="Your name..">
</div>

<div class="required">
    <label for="phone">Phone</label><span id="errphone"></span>
    <input type="number" id="phone" name="phone"  placeholder="Your Phone..">
</div>


<div class="required">
    <label for="email">Email</label><span id="erremail"></span>
    <input type="text" id="email" name="email"  placeholder="Your Email..">
</div>


<div class="required">
    <label for="subject">Subject</label><span id="errsubject"></span>
    <input type="text" id="subject" name="subject"  placeholder="Feadback subject....">
</div>

<div class="required">
    <label for="type">Type</label><span id="errtype"></span>
    <select id="type"  name="type" >
     <option>Type of feadback</option>
      <option value="Formal">Formal feedback</option>
      <option value="Informal">Informal feedback</option>
      <option value="Negative">Negative feedback</option>
      <option value="Positive">Positive feedback</option>
    </select>
</div>

<div class="required">
    <label for="message">Message</label><span id="errmassage"></span>
    <textarea id="message"  name="message"  placeholder="Write your message.." style="height:200px"></textarea>
</div>

    <input type="submit" value="Submit">
    <input type="reset" value="Clear input data">
   

  </form>
</div>
</div>

<div class="footer">
          <h4> Hotel Information System</h4>
          <img src="icon/icon3.png" style="width: 50px; height: 50px; justify-items: right;"/>
      </div>

</body>
</html>
