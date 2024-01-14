<html>

<head> 
    <title>Payment Page</title>
	<link rel="stylesheet" type="text/css" href="../css/payment.css">
</head>
	<body>
	<?php
	include '../components/header.php'
	?>

	<form action="http://localhost/bookme/backend/dbh.payment.php" method="POST">
	
    </div><br><br>
	
	    <center>
		
	   <div class="wrapper">
 
          <h1 align = "center">Payment</h1><br><br>
		  <br>
		
		
	      <h3 align = "left">Guest Information</h3><br><br><br>
		
	        <form action="/action_page.php" div class = "form1">
	   
		       <label for="fname">First Name:</label><br>
		       <input type="text" id="fname" name="fname" autofocus><br><br><br><br>
			   <label for="lname">Last Name:</label><br>
			   <input type="text" id="lname" name="lname" autofocus><br><br><br><br>
			   <label for="address">Address:</label><br>
			   <input type="text" id="address" name="address" autofocus><br><br><br><br>
			   <label for="Pnumber">Phone Number:</label><br>
			   <input type="text" id="Pnumber" name="Pnumber" autofocus><br><br><br><br>
			   <label for="email">E mail:</label><br>
			   <input type="text" id="email" name="email" autofocus><br><br><br><br>
			
	            </center>
		
	        </form ><br><br>
		
		</div><br><br>
		
		
		
		<center>
		
		    <div class="wrapper">
		
            <div class="container">
			
			    <form action="" div class = "form1">
				
				  
				
				    <div class="row">
					
					    <div class="col">
						
						    <h2 class="title">Billing Details</h2><br>
							<h5 class="title">Billing Summary(Seven Seas Hotel)</h5>
						
						</div>	
						
		            </div>

                </form>
		
			</div><br>
			
        <form action="/action_page.php">
		
		
		  <label for="fname">Arrival:</label><br>
		  <input type="text" id="fname" name="fname"  autofocus"><br>
		  
		  <label for="sname">Departure:</label><br>
		  <input type="text" id="sname" name="sname"  autofocus"><br>
		  
		  <label for="tname">Length of stay:</label><br>
		  <input type="text" id="tname" name="tname" autofocus"><br>
		  
		  <label for="foname">Rooms:</label><br>
		  <input type="text" id="foname" name="foname"  autofocus"><br>
		  
		  <label for="finame">Guests:</label><br>
		  <input type="text" id="finame" name="finame"  autofocus"><br>
		  
		  <label for="sname">Rooms only:</label><br>
		  <input type="text" id="sname" name="sname"  autofocus"><br>
		  
		  <label for="sename">Subtotal:</label><br>
		  <input type="text" id="sename" name="sename"  autofocus"><br>
		  
		  <label for="ename">Taxes & Levies:</label><br>
		  <input type="text" id="ename" name="ename"  autofocus"><br>
		  
		  <label for="nname">Coupon Code:</label><br>
		  <input type="text" id="nname" name="nname" autofocus><br>
		  <button class="button">Apply</button><br>
		  
		  <label for="scharge">Service Charge:</label><br>
		  <input type="text" id="scharge" name="scharge"  autofocus"><br>
		  
		  <label for="Tcost">Subtotal:</label><br>
		  <input type="text" id="Tcost" name="tcost"  autofocus"><br><br><br>
		  
		  <input type="radio" name="Pay at hotel" value="Pay at hotel" > Pay at hotel<br><br>
		  
		  <label for="agree">
		  <input type="checkbox" id="agree" name="agree" required>Accept Term And Conditions</label><br><br>
		  
		  </center>
		  
		  </div><br><br>
		  
		  <center>
		 
		    <div class="wrapper">
			
			    <div class="col">
						
				    <h3 class="title">Payment Details</h3>
					<br>
					<br>
						
			    </div>
				
				 <label for = "nights">Card Type:-</label><br><br>
				 <input type="radio" name="Visa" value="Visa" >Visa<br><br>
				 <input type="radio" name="Master Card" value="Master Card" >Master<br><br>
				 <input type="radio" name="Paypal" value="Paypal" >Paypal<br><br>
				 <input type="radio" name="Maestro" value="Maestro" >Maestro<br><br><br><br>
			
			<label for="cnumber">Card Number:-</label><br>
		    <input type="text" id="cnumber" name="cnumber" autofocus><br><br><br>
				
				<div class="third row">
				  <label for="edate">Expriry Date:-</label><br>
				    <div class="selection">
					    <div class="date">
						    <select name="Months" id="months">
							  <option value=>Jan</option>
							  <option value=>Feb</option>
							  <option value=>Mar</option>
							  <option value=>Apr</option>
							  <option value=>May</option>
							  <option value=>jun</option>
							  <option value=>Jul</option>
							  <option value=>Aug</option>
							  <option value=>Sep</option>
							  <option value=>Oct</option>
							  <option value=>Nov</option>
							  <option value=>Dec</option>
				            </select>
							<select name="Years" id="Years">
							  <option value="2023">2023</option>
							  <option value="2024">2024</option>
							  <option value="2025">2025</option>
							  <option value="2026">2026</option>
							  <option value="2027">2027</option>
							  <option value="2028">2028</option>
				            </select>
							
						</div>
						
					</div>
					
				</div><br><br><br><br>
				
		  <label for="chnumber">Card Holder Number:-</label><br>
		  <input type="text" id="chnumber" name="chnumber" autofocus><br><br><br><br>
		
			 <button class="button">confirm & Book</button>
			 
			 </div>
			 
			 </center>
			
		</form>
		
		</div>
		
		<?php
  		include '../components/footer.php'
  		?>

    </body>

</html>
