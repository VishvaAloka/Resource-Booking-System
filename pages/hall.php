<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<link rel = "stylesheet" href = "../css/hall.css">
    <link rel="stylesheet" href="../css/footer&header.css">
	<script src = "../../js/hall.js"></script>
</head>
<body>
	
    <?php
    include '../components/header.php'
    ?>
	<hr>
	
	<h3 class = "hr-lines"> Hall </h3> <br><br><br>
	<fieldset>
		<div class = "container_1">
			<p class = "para"><b>Grand Ball Room <br> Smoking Permitted : YES <br> Max Persons : 500 </b></p>
			<img src = "../images/image/hall_1.jpg" alt = "Hall" class = "image">
			<p class = "para">From<br><b>50,000 LKR</b><br>avg/night</p>
		</div>
		<hr class = "hr">
		
		<button id = "button1" onclick = "displayParagraphs()">Hall Rates </button>
		<button id = "button2" onclick = "showParagraph()">Hall Details </button>
		<button id = "button3" onclick = "showSlides()"> Photos </button>
		<hr class = "hr">
		
			<p id = "paragraph1"> </p>
			
			<p id = "paragraph2"></p>
		
		<div class = "slideshow-container">
			<img class = "slideshow-image active" src = "../images/image/hall_1.jpg" alt = "hall1" >
			<img class = "slideshow-image" src = "../images/image/hall_2.jpg" alt = "hall2" >
			<img class = "slideshow-image" src = "../images/image/hall_3.jpg" alt = "hall3" >
			<img class = "slideshow-image" src = "../images/image/hall_4.jpg" alt = "hall4" >
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

	
	<hr>
    <?php
    include '../components/footer.php'
    ?>

</body>
</html>