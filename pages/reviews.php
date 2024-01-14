<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reviews</title>
  <link rel="stylesheet" href="../css/reviews.css">
  <link rel="stylesheet" href="./style/footer&header.css">
</head>
<body>
  <?php
  include '../components/header.php'
  ?>


<div class="wrapper">
  <div class="review-form">
    <h2>Write a Review</h2>
    <textarea id="reviewText" placeholder="Write your review here"></textarea>
  </div>
  <div>
    <button id="submitReview">Submit</button>
  </div>
  <div>
    <h2>Reviews</h2>
    <ul id="reviewList" class="review-list">
      <li>Great booking system! Easy to use and navigate.</li>
      <li>The hotel facility booking system was a lifesaver. Saved me so much time and effort.</li>
      <li>Highly recommend the booking system. It made reserving facilities a breeze.</li>
    </ul>
  </div>
</div>


<script>
  // Get references to HTML elements
  var reviewText = document.getElementById('reviewText');
  var submitButton = document.getElementById('submitReview');
  var reviewList = document.getElementById('reviewList');

  // Add event listener to the submit button
  submitButton.addEventListener('click', function() {
    // Get the review text value
    var text = reviewText.value;

    // Create a new list item for the review
    var listItem = document.createElement('li');
    listItem.innerText = text;

    // Append the new list item to the review list
    reviewList.appendChild(listItem);

    // Clear the review text area
    reviewText.value = '';
  });
</script>
  <?php
  include '../components/footer.php'
  ?>

</body>
</html>