<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="../css/home.css">
  <link rel="stylesheet" type="text/css" href="./style/footer&header.css">
  <script src="./myScript.js"></script>
</head>

<body>
  <?php
  include '../components/header.php'
  ?>
  <div class="slider">
        <figure>
            <div class="slide">
                <!-- <p>Image one</p>-->
                <img src="../images/image/p2.jpg">
            </div>

            <div class="slide">
                <!-- <p>Image one</p>-->
                <img src="../images/image/p3.jpg">
            </div>

            <div class="slide">
                <!-- <p>Image one</p>-->
                <img src="../images/image/p4.jpg">
            </div>

            <div class="slide">
                <!-- <p>Image one</p>-->
                <img src="../images/image/p11.jpg">
            </div>

            <div class="slide">
                <!-- <p>Image one</p>-->
                <img src="../images/image/p6.jpg">
            </div>
        </figure>
  </div>


  <br>
  <div class="promotions-container">
    <div class="promotion">
      <img src="../images/image/summer.jpg" alt="Promotion 1">
      <h3>Summer Special</h3>
      <p>Enjoy 20% off on all bookings made between June and August.</p>
    </div>
    <div class="promotion">
      <img src="../images/image/w1.jpg" alt="Promotion 2">
      <h3>Weekend Getaway</h3>
      <p>Book a weekend stay and get a complimentary breakfast for two.</p>
    </div>
  </div>

  <div class="smoke">
    <section class="features">
      <div class="feature-item">
        <img src="../images/image/room.jpg" alt="Rooms">
        <h3>Rooms</h3>
        <p>Discover our comfortable and luxurious rooms.</p>
        <a href="https://www.booking.com/searchresults.en-gb.html?aid=311984&label=luxury-central-suite-dg-qHgBjghJThV4V1wmWzzTBwS589074005693%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atiaud-146342137030%3Akwd-965895534142%3Alp9069430%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YcGt_tphEo8pAE6BwGOTZ3E&gclid=Cj0KCQjwy9-kBhCHARIsAHpBjHhSWhuvuyi1KCqOi-tvCStL1rqZu86SxpLVv2GbkbZDIw7RGLkVkXgaAuWWEALw_wcB&highlighted_hotels=4973103&redirected=1&city=-123255&hlrd=no_dates&source=hotel&expand_sb=1&keep_landing=1&sid=357e8fd217b08c59bf899e59e2c75cbd" class="learn-more">Learn More</a>
      </div>
      <div class="feature-item">
        <img src="../images/image/p4.jpg" alt="Pools">
        <h3>Pools</h3>
        <p>Relax and unwind by our refreshing pools.</p>
        <a href="https://www.booking.com/hotel/it/villa-niloan.en-gb.html?aid=311984&label=luxury-central-suite-dg-qHgBjghJThV4V1wmWzzTBwS589074005693%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atiaud-146342137030%3Akwd-965895534142%3Alp9069430%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YcGt_tphEo8pAE6BwGOTZ3E&sid=357e8fd217b08c59bf899e59e2c75cbd&dest_id=-123255;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=18;hpos=18;nflt=hotelfacility%3D433;no_rooms=1;req_adults=2;req_children=0;room1=A%2CA;sb_price_type=total;sr_order=popularity;srepoch=1687720466;srpvid=b0a98721b2ce00db;type=total;ucfs=1&#hotelTmpl" class="learn-more">Learn More</a>
      </div>
      <div class="feature-item">
        <img src="../images/image/fp4.jpg" alt="Halls">
        <h3>Halls</h3>
        <p>Host your special events in our elegant halls.</p>
        <a href="" class="learn-more">Learn More</a>
      </div>
    </section>
  </div>

  <section class="hero">
    <div class="feedback">
      <h3>User Feedback</h3>
      <div class="feedback-item">
        <div class="user-info">
          <span class="user-name">Prebash Gunasekara</span>
          <span class="user-date">May 20, 2023</span>
        </div>
        <p class="user-comment">Great booking system! Easy to use and navigate. Had no issues making a reservation. The confirmation email was helpful. Would recommend!</p>
      </div>
      <div class="feedback-item">
        <div class="user-info">
          <span class="user-name">Nadeesh Anurada</span>
          <span class="user-date">May 18, 2023</span>
        </div>
        <p class="user-comment">The booking system was fantastic! It saved me a lot of time and hassle. The interface is intuitive, and I could easily find available options. I appreciate the prompt customer support as well. Highly recommended!</p>
      </div>

    </div>
  </section>
  <?php
  include '../components/footer.php'
  ?>
</body>

</html>