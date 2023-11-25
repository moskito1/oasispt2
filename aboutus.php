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
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque beatae quos repudiandae delectus, id eaque adipisci optio magni fugit veritatis quaerat, accusantium voluptatem quam voluptatibus nulla ut! Voluptatum, voluptatem eius!</p>
        </div>
        <div class="img-info">
          <img src="imgs\Menu\1.jpg" alt=""class="landscape">
        </div>
      </div>
      <div class="info">
        <div class="img-info">
        <img src="imgs\Menu\1.jpg" alt=""class="landscape">
        </div>
        <div class="text-info">
          <h2>BEHIND THE NAME 'OASIS'</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque beatae quos repudiandae delectus, id eaque adipisci optio magni fugit veritatis quaerat, accusantium voluptatem quam voluptatibus nulla ut! Voluptatum, voluptatem eius!</p>
        </div>
      </div>
      <div class="info">
        <div class="text-info">
          <h2>OUR LOCATION</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque beatae quos repudiandae delectus, id eaque adipisci optio magni fugit veritatis quaerat, accusantium voluptatem quam voluptatibus nulla ut! Voluptatum, voluptatem eius!</p>
        </div>
        <div class="img-info">
          <img src="imgs\Menu\1.jpg" alt="" class="landscape">
          <img src="imgs\Menu\1.jpg" alt="" class="portrait">
        </div>
      </div>
      <div class="qoute-container">
        <p>"Let our coffee warm your soul"</p>
      </div>
    </div>
    
    </section>

      <?php include "footer.php" ?>

    </body>
</html>