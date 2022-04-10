<!DOCTYPE html>
<html>
    <head>
        <title>Apartment Recording</title>
        <link rel="stylesheet" type="text/css" href="css/apartmentRecording.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <script type="text/javascript" src="js/script.js"></script>
        <link rel="icon" type="image/x-icon" href="icon/icon3.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

   

    <body>

        <div class="header">
            <h1>Apartment Recording</h1>
            <p>Welcome to the apartment recording</p>
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



  <form method="POST" action="apartment.php" name='apartmentRecord'  onSubmit="return validate();" >
 
  

  <div class="required">
    <label for="apartmentNumber">Apartment Number</label>
    <input type="number" id="apartmentNumber" required  name="apartmentNumber"  placeholder="Enter Apartment Number...">
    
  </div>

  <div class="required">
    <label for="floorNumber">Floor Number</label><span id="errfloorNumber"></span>
    <select id="floorNumber" required name="floorNumber" >
     <option selected>Floor Number...</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
    </select>
    </div>

    <div class="required">
    <label for="NumberOfRooms">Number Of Rooms</label>
    <input type="number" id="NumberOfRooms" required name="NumberOfRooms"  placeholder="Enter Number Of Room...">
    </div>

<div class="required">
    <label for="occupied">Occupied</label><span id="errOccupied"></span>
    <div>
       <h4> Busy <input type="radio" id="busy" required name="occupied"  value="Buzy" /></h4>
       <h4> Not busy <input type="radio" id="notBusy" required name="occupied"  value="Not busy" /></h4>
   </div>
</div>


<div class="required">
    <label for="price">Price</label>
    <input type="text" id="price" required name="price" placeholder="Enter price....">
</div>

    <label for="payment">Payment</label>
    <input type="text" id="payment" required name="payment"  placeholder="Enter payment....">
    

    <label for="PaymentDateTime">Payment DateTime</label>
    <input type="date"  id="PaymentDateTime" required name="PaymentDateTime"  placeholder="Enter payment date time....">
   

  <label for="RentStartDate">Rent Start Date</label>
  <input type="date" id="RentStartDate" required name="RentStartDate" >

  <label for="RentEndDate">Rent End Date</label>
  <input type="date" id="RentEndDate" required name="RentEndDate" >


    <label for="RenterNationalID">Renter National ID</label>
    <input type="text" id="RenterNationalID" required name="RenterNationalID"  placeholder="Enter Renter National ID...">

    <label for="RenterName">Renter Name</label>
    <input type="text" id="RenterName" required name="RenterName"  placeholder="Enter Renter Name...">

    <input type="submit" value="Submit">
    <input type="reset" value="clear input data">
   
    

  </form>
</div>
</div>
         
          <div class="footer">
          <h4> Hotel Information System</h4>
          <img src="icon/icon3.png" style="width: 50px; height: 50px; justify-items: right;"/>
      </div>
    </body>
</html>