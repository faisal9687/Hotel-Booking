function validate()
            {
var apartmentNumber = document.getElementById("apartmentNumber").value;
var floorNumber = document.getElementById("floorNumber").value;
var NumberOfRooms = document.getElementById("NumberOfRooms").value;
var occupied = document.occupied("pattern").value;
var price = document.getElementById("price").value;
var payment = document.getElementById("payment").value;
var PaymentDateTime = document.getElementById("PaymentDateTime").value;
var RentStartDate = document.getElementById("RentStartDate").value;
var RentEndDate = document.getElementById("RentEndDate").value;
var RenterNationalID = document.getElementById("RenterNationalID").value;
var RenterName = document.getElementById("RenterName").value;


if(apartmentNumber === ""){
    document.getElementById("errapartmentNumber").innerHTML="Field is empty!";
}
else{
    document.getElementById("errapartmentNumber").innerHTML="";
}

            }