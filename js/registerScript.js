function myFunction() {
    alert("Hello! I am an alert box!");
  }


  var isvalid = true;
  function checkNationalID() {
  
  
    var natID = document.getElementById("natID").value;
  
      if (natID === "" || natID.length < 10) {
          document.getElementById("errNatID").textContent = "National ID must have 10 alphabet at least";
          isvalid = false;
      } else {
          document.getElementById("errNatID").textContent = "";
  
      }
  }

  function checkFname() {
      var fname = document.getElementById("fname").value;
  
      if (fname === "" || fname.length < 6) {
          document.getElementById("errfname").textContent = "First name must have 6 alphabet at least";
          isvalid = false;
      } else {
          document.getElementById("errfname").textContent = "";
  
      }
    }

    function checkLname() {

  var lname = document.getElementById("lname").value;
  
      if (lname === "" || lname.length < 6) {
          document.getElementById("errlname").textContent = "Last name must have 6 alphabet at least";
          isvalid = false;
      } else {
          document.getElementById("errlname").textContent = "";
  
      }
    }
  
  function checkEmail() {
  
      var letters = /^[a-zA-Z0-9.!#$%&�*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
      if (document.getElementById("email").value.match(letters)) {
          document.getElementById("erremail").textContent = "";
  
      } else {
  
          document.getElementById("erremail").textContent = "Email is invalid";
          isvalid = false;
      }
  
  }
  
  function checkUsername(){

  var username = document.getElementById("username").value;
  
      if (username === "" || username.length < 6) {
          document.getElementById("errUsername").textContent = "Username must have 6 alphabet at least";
          isvalid = false;
      } else {
          document.getElementById("errUsername").textContent = "";
  
      }
    }

  
    function CheckPassword(inputtxt) 
    { 
    var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
    if(inputtxt.value.match(decimal)) 
    { 
    alert('Correct, try another...')
    return true;
    }
    else
    { 
    alert('Wrong...!')
    return false;
    }
    } 
  
  function formValidation()
  {
  
    checkNationalID();
    checkFname();
    checkLname();
      checkEmail();
      checkUsername();
      checkPassword(inputtxt);
  
      return isvalid;
  }
  
  
  