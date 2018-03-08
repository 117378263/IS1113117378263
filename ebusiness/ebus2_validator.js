/* global $ */

function validateDetails(){
    
    // declaring my variables
    
    var pin;
    var firstname;
    var lastname;
    var email;
    
    // applying values to my variables
    
    pin = document.getElementById("user_pin").value;
     firstname = document.getElementById("firstname_1").value;
      lastname = document.getElementById("lastname_1").value;
       email = document.getElementById("email_1").value;
    
    // if statements to ensure correct data entered
    
    if (pin==""){
        alert("Please enter your PIN");
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
        else if (firstname==""){
            alert("Please enter your First Name")
        }
        else if (lastname==""){
            alert("Please enter your Last Name")
        }
        else if (email==""){
        alert("Please enter an email");
   }
    else{
        enablebtnPurchase();
        }
}

// function for proceed button
function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}