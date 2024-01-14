<html>

<head>
  <title>contact us</title>
  <link rel="stylesheet" type="text/css" href="../css/contact-us.css">
</head>

<body>
  <?php
  include '../components/header.php'
  ?>

  <hr>
  <div class="contact-container">
    <div class="contact-form"+>
      <h2>Contact Us</h2>
      <form action="http://localhost/bookme/backend/dbh.contact-us.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="fname" placeholder="Your Name">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Your Email">

        <label for="Telephone">Telephone No:</label>
        <input type="telephone" id="Telephone" name="telephone" placeholder="Your Telephone number">

        <label for="message">Message:</label>
        <textarea id="message" name="message1" placeholder="Your message"></textarea>

        <input type="submit" name="submit" value="Submit">
      </form>
    </div>

    <div class="contact-info">
      <h2>Contact Information</h2>
      <p><strong>Address:<br></strong>BookMe.com PVL,<br>NO:23,<br>Saranankra Rode,<br>colombo 07,<br>Sri Lanka.</p>
      <p><strong>Telephone:<br></strong> +94 2245789</p>
      <p><strong>Email Address</Address>
          </address>
          </address>:<br></strong> bookme.com@gmail.com</p>
      <div class="footer-menu-2">

        <a href="https://www.facebook.com/">
          <img class="icon" src="../images/image/f1.png" width="40" height="40">
        </a>
        <a href="https://www.youtube.com/">
          <img class="icon" src="../images/image/y1.png" width="40" height="40">
        </a>

        <a href="https://www.instagram.com/">
          <img class="icon" src="../images/image/i1.png" width="40" height="40">
        </a>
        <a href="https://www.twitter.com/">
          <img class="icon" src="../images/image/tw1.png" width="40" height="40">
        </a>
      </div>
    </div>


  </div>

  </div>


  <br>
  <br>
  <?php
  include '../components/footer.php'
  
  ?>

</body>

</html>