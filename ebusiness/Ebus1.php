<!Doctype html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--Jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
    </head>
    
    <body>
        
        <h4>Select a Product</h4>
        <br/>
        
        <form method="Post" Action="ebus2.php">
            
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnproceed()"/>
                Salesforce @ $100
            </label>
            
            <br/>
            
              <label for="aws">
                <input type="radio" id="aws" name="product" checked onClick="disablebtnproceed()"/>
                AWS @ $300
            </label>
            
            <br/>
            <br/>
            
            <Label for="subtotal">
                Sub Total
                  <input type="text" id="subtotal" value="0.00" read only/>
            </Label>
            
            <br/>
            
            <label for="Total">
            Total
            <input type="text" id="total" value="0.00" read only/>
            </Label>
            
            
            <br/>
            
            <button type="submit" id="btnProceed" disabled>Add to Shopping cart</button>
            
            
            
        </form>
        
        <br/>
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
    </body>
</html>