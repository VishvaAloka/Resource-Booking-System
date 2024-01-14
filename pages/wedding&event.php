<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Wedding And Event Page</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="../css/wedding.css">
  <link rel="stylesheet" href="../footer&header.css">

  <style>
    .slideshow-container {
      position: relative;
      max-width: 600px;
      margin: auto;
    }

    .slideshow-image {
      height: 500px;
      width: 600px;
      display: none;
    }

    .slideshow-image-active {
      display: block;
    }

    .hr-lines {
      /* position: relative; */
      max-width: 500px;
      margin: 50px auto;
      text-align: center;
    }
  </style>
  <link rel="stylesheet" href="../css/frontend/css/header.css">
</head>

<body style="background-color:#BFC9CA ">
  <?php
  include '../components/header.php'
  ?>
  <header>
    <h1>Wedding And Events</h1> <br><br><br>

    <div class="slideshow-container">
      <img class="slideshow-image active" src="../images/image/wed1.jpg" alt="wedding1">
      <img class="slideshow-image" src="../images/image/wed2.jpg" alt="wedding2">
      <img class="slideshow-image" src="../images/image/wed3.jpg" alt="wedding3">
      <img class="slideshow-image" src="../images/image/wed4.jpg" alt="wedding4">
      <img class="slideshow-image" src="../images/image/wed5.jpg" alt="wedding5">
    </div>

    <br>
    <br>

    <script>
      var slideIndex = 0;
      showSlides();

      function showSlides() {
        var slides = document.getElementsByClassName("slideshow-image");
        for (var i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
          slideIndex = 1;
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000); //change slide every seconds
      }
    </script>

    <?php
    include '../components/footer.php'
    ?>

</body>

</html>