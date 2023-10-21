<?php 
session_start();
include('dbconnection.php');

if (isset($_GET['id'])) {
  $product_id = $_GET['id'];

  $sql = "SELECT * FROM products WHERE prodid = ?";
  $stmt = mysqli_prepare($conn, $sql);

  if($stmt) {
    mysqli_stmt_bind_param($stmt, 'i', $product_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($product = mysqli_fetch_assoc($result)){ ?>
     <html>
      <head>
        <title>Oasis Cafe</title>
      </head>
      <body>
        <?php include "header.php";?>

        <section class="product-page">
          <div class="product-container">
          <div class="left-product">
            <div class="product-image">
              <img src="<?php echo $product['img']; ?>" alt="">
            </div>
            <div class="product-description">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias voluptate debitis accusantium illum aut nesciunt</p>
            </div>
          </div>
          <div class="right-product">
            <div class="product-name">
              <h1><?php echo $product['prodname']; ?></h1>
            </div>
            <div class="product-price">
              <span class="display-price">₱ <?php echo number_format($product['tallprice'], 2); ?></span>
            </div>
            <div class="product-size">
              <p>Sizes:</p>
              <div class="size-button">
                <button onClick="updatePrice(this, 'tall', <?php echo $product['tallprice'];?>)">Tall</button>
                <button onClick="updatePrice(this,'grande', <?php echo $product['grandeprice'];?>)">Grande</button>
                <button onClick="updatePrice(this,'venti', <?php echo $product['ventiprice'];?>)">Venti</button>
              </div>
            </div>
            <div class="product-quantity">
              <p>Quantity:</p>
              <div class="quantity-counter">
                <span class="decrease" onClick='decreaseCount(event, this)'>-</span>
                <input type="text" value="1" id="quantity">
                <span class="increase" onClick='increaseCount(event, this)'>+</span>
              </div>
            </div>
            <div class="cart-buy-button">
            <form method="post" action="add_to_cart.php">
              <!-- Hidden input fields to store product information -->
              <input type="hidden" name="product_id" value="<?php echo $product['prodid']; ?>"> 
              <input type="hidden" name="product_name" value="<?php echo $product['prodname']; ?>"> 
              <input type="hidden" name="product_img" value="<?php echo $product['img']; ?>">
              <input type="hidden" name="product_price" id="selected_size" value="<?php echo $product['tallprice']; ?>">

              <!-- Add to Cart button -->
              <input type="submit" name="cart" value="Add to Cart"></input>
            </form>
            </div>
          </div>
          </div>
        </section>
      </body>
      <script>
        let activeButton = null;

        function increaseCount(a, b) {
          var input = b.previousElementSibling;
          var value = parseInt(input.value, 10);
          value = isNaN(value) ? 0 : value;
          value++;
          input.value = value;
        }

        function decreaseCount(a, b) {
          var input = b.nextElementSibling;
          var value = parseInt(input.value, 10);
          if (value > 1) {
            value = isNaN(value) ? 0 : value;
            value--;
            input.value = value;
          }
        }

        function updatePrice(button, size, price) {
          var displayPrice = document.querySelector('.display-price');
          var selectedSizeInput = document.getElementById('selected_size');
          price = parseFloat(price);
          if (!isNaN(price)) {
            displayPrice.innerHTML = '₱ ' + price.toFixed(2);
            selectedSizeInput.value = size;
            if (activeButton) {
              activeButton.classList.remove('active');
            }
            button.classList.add('active');
            activeButton = button;
          }
        }
      </script>
    </html>
   <?php } // Remove the closing curly brace from here
  } // Remove the closing curly brace from here
} // Remove the closing curly brace from here
?>
