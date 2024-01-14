<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<link rel = "stylesheet" href = "../css/room.css">
	<script src = "../../js/room.js"> </script>
	
</head>
<body>
	
	<?php
    include '../components/header.php'
	?>
	
	<hr>
	
	<h1> Rooms </h1> <br><br><br>
	<fieldset>
		<div class = "container_1">
			<p class = "para"><b> Superior Room <br> Smoking Permitted : NO <br> Max Persons : 6 </b></p>
			<img src = "../images/image/superior_room.jpg" alt = "room" class = "image">
			<p class = "para">From<br><b>21,000 LKR</b><br>avg/night</p>
		</div>
		<hr class = "hr">
		
		<button id = "button1" onclick = "displayParagraphs()"> Room Rates </button>
		<button id = "button2" onclick = "showParagraph()"> Room Details </button>
		<button id = "button3" onclick = "showSlides()"> Photos </button>
		<hr class = "hr">
			
				<p id = "paragraph1"> </p>
			
				<p id = "paragraph2"></p>
			
			<div class = "slideshow-container">
				<img class = "slideshow-image active" src = "../images/image/room_2.jpg" alt = "room_2" >
				<img class = "slideshow-image" src = "../images/image/room_3.jpg" alt = "room_3" >
				<img class = "slideshow-image" src = "../images/image/room_4.jpg" alt = "room_4" >
				<img class = "slideshow-image" src = "../images/image/room_5.jpg" alt = "room_5" >
				<img class = "slideshow-image" src = "../images/image/g6.jpg" alt = "room_6" >
				
			</div>
		
	</fieldset>
	<br><br><br>
	


	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<?php
    include '../components/footer.php'
    ?>
	
</body>
</html>