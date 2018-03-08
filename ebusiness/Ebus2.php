<?php
// Start the session
session_start();
?>



<!DOCTYPE html>

<html>
    <head>
        
        
         <style>
         
         /* styling page with buttons and background image*/
          .bottom_img{
        position: fixed;
        width: 560px;
    }
         
      body{
    background:url('http://raslras.com/images/features_bg.jpeg') no-repeat;
    background-size: cover;
    font-family: arial;
    color: white;
}
   

    .button_proceed{
  height:38px;
  background:#0f847c;
  border:0;
  padding-left: 20px;
  padding-right:20px;
  color:#ffffff;
  cursor: pointer;
}
    .Validate{
border: 2px solid #f44336;
    background-color: white; 
    color: blue;
    padding: 10px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
 .hover:hover{
     background-color: #0000FF;
    color: white; 
 }

</style>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body align="center">
        
        <h4>Please enter your payment details.</h4>

            <br />
            
            <form align="center" method = "POST" action = "Ebus3.php">
                
                
                  <!--Labels for Information Input-->
                First name:<br>

 <label for="firstname"> First Name</label>
  <input type="text" id="firstname_1" name="firstname"  placeholder="First Name" maxlength="25">
<br><br>
<label for="lastname"> Last Name</label>
  <input type="text" id="lastname_1" name="lastname"  placeholder="Last Name" maxlength="25">
<br><br>

                <label for "email"> Email Address</label>
                
                <input type="text" id="email_1" name="email" maxlength="30" placeholder="Email">
  
  <br/><br/>
  
                
                <label for="user_pin">
                     PIN 
                </label>
                
                  <!--max length of pin set to 4 characters-->
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                    
                      <!--button to proceed with purchase-->
                <button class ="button_proceed" type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
               
 


                
            </form>
            
            <br />
            
              <!--button to validate details-->
              
            <button  class ="Validate hover" onClick="validateDetails()"> Validate </button>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <br/>
        
         <img align="center" class="bottom_img" src="http://www.globallinkic.org/images/interface/bodyFooter_img1.png"/>
        
        
         <?php
        // Set session variables
        
        $_SESSION["subtotal"] = $_POST["subtotal"];
        
        $_SESSION["discount"] = $_POST["discount"];
        
        $_SESSION["vat"] = $_POST["vat"];
        
        $_SESSION["total"] = $_POST["total"];
        
        $_SESSION["name"] = $_POST["firstname"];
        
        $_SESSION["name"] = $_POST["lastname"];
        
        $_SESSION["email"] = $_POST["email"];
        
        ?>
        
        
          <!--adding a footer to page-->
        <div id = "Footer">
              <p>Copyright 2009 &COPY; All Rights Reserved. Ebus Services by James Donovan 117378263</p>
          </div>
        
    </body>
    
    
    
</html>
