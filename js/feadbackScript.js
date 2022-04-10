var isvalid = true;

function checkName() {

    var name = document.getElementById("name").value;

    if (name === "" || name.length < 6) {
        document.getElementById("errname").textContent = "Field is empty! Please enter name";
        isvalid = false;
    } else {
        document.getElementById("errname").textContent = "";

    }
}

function checkPhone() {
    var phone = document.getElementById("phone").value;


    if (phone === "" || phone.length < 10) {
        document.getElementById("errphone").textContent = "Field is empty! Please enter phone number";
        isvalid = false;
    } else if (phone.length == 10 && phone.startsWith("05") == false) {
        document.getElementById("errphone").textContent = "phone must be start with 05XXXXXXXX or 9665XXXXXXXXX";
        isvalid = false;
    } else if (phone.length == 12 && phone.startsWith("9665") == false) {
        document.getElementById("errphone").textContent = "phone must be start with 05XXXXXXXX or 9665XXXXXXXXX";
        isvalid = false;
    } else {
        document.getElementById("errphone").textContent = "";

    }

}


function checkEmail() {

    var letters = /^[a-zA-Z0-9.!#$%&�*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (document.getElementById("email").value.match(letters)) {
        document.getElementById("erremail").textContent = "";

    } else {

        document.getElementById("erremail").textContent = "Field is empty! Please enter Email ";
        isvalid = false;
    }

}

function checkType() {
    var type = document.getElementById("type").value;

    if (type == "Default") {
        document.getElementById("errtype").textContent = "Choose a feadback type";
        isvalid = false;
    } else {
        document.getElementById("errtype").textContent = "";

    }

}

function checkSubject(){
    var subject = document.getElementById("subject").value;

    if (subject == "" ) {
        document.getElementById("errsubject").textContent = "Field is empty! Please enter subject of feadback";
        isvalid = false;
    } else {
        document.getElementById("errsubject").textContent = "";

    }
}

function checkMassage(){
    var massage = document.getElementById("massage").value;

    if (massage == "" ) {
        document.getElementById("errmassage").textContent = "Field is empty! Please enter massage of feadback";
        isvalid = false;
    } else {
        document.getElementById("errmassage").textContent = "";

    }
}

function formValidation()
{

    checkName();
    checkPhone();
    checkEmail();
    checkSubject();
    checkType();
    checkMassage();
    return isvalid;
}

