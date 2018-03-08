<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    
    <style>
    /* styling page with buttons and background image*/
          body{
    background:url('https://wallpaperbrowse.com/media/images/584f7ed9727de421d422911f8b1c3a54.jpg') no-repeat;
    background-size: cover;
    font-family: arial;
    color: black;
          }
          
            .print{
  height:38px;
  background:#0f847c;
  border:0;
  padding-left: 20px;
  padding-right:20px;
  color:#ffffff;
  cursor: pointer;
            }
    </style>
    
    <div align="center">
    <body>
         <h1 style="color:BLUE;" align="left">THANK YOU FOR YOUR ORDER!</h1>
         <br /> <br />
        <h2 style="color:red;" align="center">RECEIPT</h2>
      
       <?php
          //Echo Session variables that were set on previous page
           echo "First Name: " . $_POST["firstname"] . "<br /> <br />";
           
            echo "Last Name: " . $_POST["lastname"] . "<br /> <br />";
       
           echo "Email: " . $_POST["email"] . "<br /> <br />";
       
           echo "Subtotal: " . $_SESSION["subtotal"] . " Euro.<br /> <br />";
        
           echo "Discount: " . $_SESSION["discount"] . " Euro.<br /> <br />";
       
       
           echo "Total After Vat: " . $_SESSION["total"] . " Euro.<br /> <br />";
       
           ?>
           
           <div align="center">
           
 <!--adding print button to page-->
<button onclick="PrintFunction()" class="print">Print this page</button>
</div>

 <!--print function-->
<script>
function PrintFunction() {
    window.print();
}
</script>

           
 <div id = "Footer">
              <p>Copyright 2009 &COPY; All Rights Reserved. Ebus Services by James Donovan 117378263</p>
          </div>
          
    </body>
  <body/>
  <div/>
  
  
</html>