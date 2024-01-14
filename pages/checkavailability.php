<!DOCTYPE html>
<html>

   <head>
       <title>Check Availability</title>
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/
    css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

       <link rel="stylesheet" type="text/css" href="../css/checkavailability.css">
       <link rel="stylesheet" type="text/css" href="./style/footer&header.css">
	   
	  
    </head>
   
   <body> 
    <?php
    include '../components/header.php'
    ?>

   

   <br><br><br><br>
   
   
       <center>
		
		<div class="wrapper"><br>
   
          <h1 class = "hr-lines">Check Availability</h1><br>
  
            <form action="/action_page.php">
         
                <label for="Arrival">Arrival:</label><br>
                <div class="field-input">
		        <input type="date" id="date" name="date" required><br><br><br>
                </div>

		        <label for = "nights"> Nights: </label>
		        <div class="field-input">
			    <input type="number" id = "nights" name="nights" min="0" min="0" max="100" steps="1">
		        <br><br><br>
              </div>

		        <label for="Departure">Departure:</label><br>
              <div class="field-input">
		        <input type="date" id="date" name="date" required><br><br><br>
              </div>

              <label for="Adults">Adults:</label>
              <div class="field-input">
			    <input type="number" id = "Adults" name="Adults" min="0" min="0" max="4" steps="1"><br><br>
              </div>

			    <label for="Adults">Children:</label>
		        	<div class="field-input">
			    <input type="number" id = "Children" name="Children" min="0" min="0" max="2" steps="1"><br><br><br><br>
               </div>
            </form>
		
		</div>
  
       
		
      <button class="button"><span>Check Availability</span></button>

		
	   </center>
	   <br>
    <?php
    include '../components/footer.php'
    ?>

    </body>
</html>
