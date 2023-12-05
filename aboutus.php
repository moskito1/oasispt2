<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Oasis Cafe</title>

</head>
<body>
    <?php include "header.php"; ?>
    <section class= "about-us">

    <div class="about-head">
      <h1>ABOUT US</h1>
    </div>

    <div class="about-container">
      <div class="info">
        <div class="text-info">
          <h2>OUR BACKGROUND</h2>
          <p> ipsum dolor sit amet consectetur adipisicing elit. Atque beatae quos repudiandae delectus, id eaque adipisci optio magni fugit veritatis quaerat, accusantium voluptatem quam voluptatibus nulla ut! Voluptatum, voluptatem eius!</p>
        </div>
        <div class="img-info">
          <img src="imgs\about-us\background.jpg" alt=""class="landscape">
        </div>
      </div>
      <div class="info">
        <div class="img-info">
        <img src="imgs\about-us\behind-name.avif" alt=""class="landscape">
        </div>
        <div class="text-info">
          <h2>BEHIND THE NAME 'OASIS'</h2>
          <p>The name "Oasis" is meant to describe a refuge or source of relief from something difficult or unpleasant. This is where the idea for the name "Oasis" originated and it aptly reflects the idea that Oasis coffee offers a comforting escape through its carefully crafted brews.</p>
        </div>
      </div>
      <div class="info">
        <div class="text-info">
          <h2>OUR LOCATION</h2>
          <p>Our cafe is located at Near Pyur Luxury, Ascott, 5th Avenue Corner
28th Street, Bonifactio Global City, Metro Manila. It is opened from Monday to Friday at 6:00am to 11:pm and from Saturday to Sunday at 8:00am to 1:00am.</p>
        </div>
        <div class="img-info">
          <img src="imgs\about-us\location-landscape.jpg" alt="" class="landscape">
          <img src="imgs\about-us\location-portrait.avif" alt="" class="portrait">
        </div>
      </div>
      <div class="qoute-container">
        <p>"Let our coffee replenish your soul"</p>
      </div>
    </div>
    
    </section>

      <?php include "footer.php" ?>

    </body>
</html>